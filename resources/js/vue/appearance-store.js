const APPEARANCE_STORAGE_KEY = "ddfsn.appearance";

/**
 * Variant-owned appearance engine mirroring the vanilla layer's
 * Alpine `State` behaviour without depending on Alpine. Owns the
 * `ddfsn.appearance` storage contract, the `window.DDFSN` bridge
 * and the transition pause behaviour.
 */
export function createAppearanceStore() {
    // For appearance automation the `@ddfsnAppearance` directive
    // should be added to the layout. Without it we reset the
    // previously set state.
    let applyAppearance = window.DDFSN?.applyAppearance;

    if (! applyAppearance) {
        applyAppearance = () => {};

        window.localStorage.removeItem(APPEARANCE_STORAGE_KEY);
    }

    let appearance = window.localStorage.getItem(APPEARANCE_STORAGE_KEY) || "system";

    const media = window.matchMedia("(prefers-color-scheme: dark)");

    const listeners = new Set();

    let started = false;
    let stopMedia = null;
    let stopLivewire = null;

    const isDark = () => {
        return appearance === "system" ? media.matches : appearance === "dark";
    };

    const snapshot = () => {
        return { appearance, systemDark: media.matches, dark: isDark() };
    };

    const notify = () => {
        listeners.forEach((listener) => listener(snapshot()));
    };

    const pauseTransitions = () => {
        document.documentElement.setAttribute("data-ddfsn-pause-transitions", "true");
    };

    const resumeTransitions = () => {
        // Double request to ensure we're using the next frame...
        requestAnimationFrame(() => requestAnimationFrame(
            () => document.documentElement.removeAttribute("data-ddfsn-pause-transitions")
        ));
    };

    const store = {
        get appearance() {
            return appearance;
        },
        set appearance(value) {
            if (value === appearance) {
                return;
            }

            appearance = value;

            // Persistence and the `dark` class toggle are owned by the
            // `@ddfsnAppearance` hook.
            applyAppearance(appearance);
            notify();
        },
        get systemDark() {
            return media.matches;
        },
        isDark,
        snapshot,
        subscribe(listener) {
            listeners.add(listener);

            return () => listeners.delete(listener);
        },
        start() {
            if (started) {
                return;
            }

            started = true;

            // Keep the `window.DDFSN` contract so Blade markup and
            // Alpine widgets stay in sync.
            window.DDFSN = {
                ...window.DDFSN,
                applyAppearance,

                get appearance() {
                    return store.appearance;
                },
                set appearance(value) {
                    store.appearance = value;
                },
                get dark() {
                    return store.isDark();
                },
                set dark(value) {
                    store.appearance = value ? "dark" : "light";
                },
            };

            let onMediaChange = () => {
                pauseTransitions();
                applyAppearance(appearance);
                resumeTransitions();
                notify();
            };

            media.addEventListener("change", onMediaChange);
            stopMedia = () => media.removeEventListener("change", onMediaChange);

            let onLivewireNavigating = (event) => {
                event.detail.onSwap(() => {
                    pauseTransitions();
                    applyAppearance(appearance);
                    resumeTransitions();
                });
            };

            document.addEventListener("livewire:navigating", onLivewireNavigating);
            stopLivewire = () => document.removeEventListener("livewire:navigating", onLivewireNavigating);

            applyAppearance(appearance);
        },
        stop() {
            if (! started) {
                return;
            }

            stopMedia?.();
            stopLivewire?.();

            stopMedia = stopLivewire = null;
            started = false;
        },
    };

    return store;
}

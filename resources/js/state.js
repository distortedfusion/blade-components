import { setAttribute, removeAttribute } from './utils.js';

export class State {
    boot() {
        let Alpine = window.Alpine;

        // For appearance automation the `@ddfsnAppearance` directive
        // should be added to the layout. Without it we reset the
        // previously set state.
        let applyAppearance = window.DDFSN?.applyAppearance;

        if (! applyAppearance){
            applyAppearance = () => {};

            window.localStorage.removeItem("ddfsn.appearance");
        }

        let ddfsn = Alpine.reactive({
            appearance: window.localStorage.getItem("ddfsn.appearance") || "system",
            triggerReactivityCounter: 1,
            get dark() {
                JSON.stringify(ddfsn.triggerReactivityCounter);

                if (ddfsn.appearance === 'system') {
                    let media = window.matchMedia("(prefers-color-scheme: dark)");

                    return media.matches;
                }

                return ddfsn.appearance === 'dark';
            },
            set dark(apply) {
                let isDark = this.dark;

                if (apply === isDark) {
                    return;
                }

                ddfsn.appearance = apply ? 'dark' : 'light';
            }
        });

        window.DDFSN = ddfsn;

        Alpine.magic("ddfsn", () => ddfsn);

        Alpine.effect(() => {
            applyAppearance(ddfsn.appearance);
        });

        this.watchForMediaChanges(ddfsn, applyAppearance);
        this.watchForLivewireNavigate(ddfsn, applyAppearance);
    }

    watchForMediaChanges(ddfsn, applyAppearance) {
        let media = window.matchMedia("(prefers-color-scheme: dark)");

        media.addEventListener("change", () => {
            ddfsn.triggerReactivityCounter++;

            this.pauseTransitions();
            applyAppearance(ddfsn.appearance);
            this.resumeTransitions();
        });
    }

    watchForLivewireNavigate(ddfsn, applyAppearance) {
        document.addEventListener("livewire:navigating", (e) => {
            e.detail.onSwap(() => {
                this.pauseTransitions();
                applyAppearance(ddfsn.appearance);
                this.resumeTransitions();
            });
        });
    }

    pauseTransitions() {
        setAttribute(document.documentElement, 'data-ddfsn-pause-transitions', true);
    }

    resumeTransitions() {
        // Double request to ensure we're using the next frame...
        requestAnimationFrame(() => requestAnimationFrame(
            () => removeAttribute(document.documentElement, 'data-ddfsn-pause-transitions')
        ));
    }
}

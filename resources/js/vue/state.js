import { computed, ref } from 'vue'
import { createAppearanceStore } from './appearance-store.js'

let ddfsn = null;

export function useDdfsn() {
    if (ddfsn) {
        return ddfsn;
    }

    const store = createAppearanceStore();

    store.start();

    const snapshot = ref(store.snapshot());

    const unsubscribe = store.subscribe((next) => {
        snapshot.value = next;
    });

    const appearance = computed({
        get: () => snapshot.value.appearance,
        set: (value) => {
            store.appearance = value;
        },
    });

    const systemDark = computed(() => snapshot.value.systemDark);

    const dark = computed({
        get: () => snapshot.value.appearance === "system"
            ? snapshot.value.systemDark
            : snapshot.value.appearance === "dark",
        set: (apply) => {
            if (apply === dark.value) {
                return;
            }

            store.appearance = apply ? "dark" : "light";
        },
    });

    ddfsn = {
        appearance,
        systemDark,
        dark,

        setAppearance: (value) => {
            store.appearance = value;
        },
        toggle: () => {
            store.appearance = dark.value ? "light" : "dark";
        },
        dispose: () => {
            unsubscribe();
            store.stop();

            ddfsn = null;
        },
    };

    return ddfsn;
}

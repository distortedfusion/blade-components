export class DDFSNElement extends HTMLElement {
    wasDisconnected = false;
    onUnmounts = [];

    constructor() {
        super();
        this.boot?.();
    }

    connectedCallback() {
        if (this.wasDisconnected) {
            this.wasDisconnected = false;
            return;
        }

        queueMicrotask(() => {
            this.mount?.();
        });
    }

    disconnectedCallback() {
        this.wasDisconnected = true;
        queueMicrotask(() => {
            if (this.wasDisconnected) {
                this.unmount?.();
                this.onUnmounts.forEach((i) => i());
                this.onUnmounts = [];
            }
            this.wasDisconnected = false;
        });
    }

    onUnmount(callback) {
        this.onUnmounts.push(callback);
    }
}

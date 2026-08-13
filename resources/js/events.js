export class Observable {
    constructor() {
        this.subscribers = [];
    }

    subscribe(reason, callback) {
        this.subscribers.push({ reason, callback });
    }

    notify(reason, data) {
        this.subscribers.forEach(({ reason: subReason, callback }) => {
            if (reason === subReason) callback(data);
        });
    }
}

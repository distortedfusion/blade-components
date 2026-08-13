export function durableAttributeObserver(el, initialAttributes) {
    let processMutations = (mutations) => {
        mutations.forEach((mutation) => {
            mutation.oldValue === null
                ? el._durableAttributeObserver.pause(() => removeAttribute(el, mutation.attributeName))
                : el._durableAttributeObserver.pause(() => setAttribute(el, mutation.attributeName, mutation.oldValue));
        });
    };

    let observer = new MutationObserver((mutations) => processMutations(mutations));

    observer.observe(el, { attributeFilter: initialAttributes, attributeOldValue: true });

    return {
        attributes: initialAttributes,
        hasAttribute(name) {
            return this.attributes.includes(name);
        },
        addAttribute(name) {
            this.attributes.includes(name) || this.attributes.push(name);
            observer.observe(el, { attributeFilter: this.attributes, attributeOldValue: true });
        },
        releaseAttribute(name) {
            if (!this.hasAttribute(name)) return;
            this.attributes = this.attributes.filter((a) => a !== name);
            observer.observe(el, { attributeFilter: this.attributes, attributeOldValue: true });
        },
        pause(callback) {
            processMutations(observer.takeRecords());
            observer.disconnect();
            callback();
            observer.observe(el, { attributeFilter: this.attributes, attributeOldValue: true });
        }
    };
}

export function setAttribute(el, name, value) {
    if (el._durableAttributeObserver === void 0) {
        el._durableAttributeObserver = durableAttributeObserver(el, [name]);
    }

    if (!el._durableAttributeObserver.hasAttribute(name)) {
        el._durableAttributeObserver.addAttribute(name);
    }

    el._durableAttributeObserver.pause(() => {
        el.setAttribute(name, value);
    });
}

export function removeAttribute(el, name) {
    if (el._durableAttributeObserver === void 0) {
        el._durableAttributeObserver = durableAttributeObserver(el, [name]);
    }

    if (!el._durableAttributeObserver.hasAttribute(name)) {
        el._durableAttributeObserver.addAttribute(name);
    }

    el._durableAttributeObserver.pause(() => {
        el.removeAttribute(name);
    });
}

export function releaseAttribute(el, name) {
    if (! el?._durableAttributeObserver?.hasAttribute(name)) {
        return
    }

    el._durableAttributeObserver.releaseAttribute(name);
}

export function removeAndReleaseAttribute(el, name) {
    removeAttribute(el, name);
    releaseAttribute(el, name);
}

export function setStyle(el, style, value) {
    let currentValue = el.style[style];

    el.style[style] = value;

    return () => { el.style[style] = currentValue };
}

export function defineElement(alias, customElementConstructor) {
    customElements.define(`ddfsn-${alias}`, customElementConstructor);
}

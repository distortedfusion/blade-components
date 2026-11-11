// resources/js/utils.js
function durableAttributeObserver(el, initialAttributes) {
  let processMutations = (mutations) => {
    mutations.forEach((mutation) => {
      mutation.oldValue === null ? el._durableAttributeObserver.pause(() => removeAttribute(el, mutation.attributeName)) : el._durableAttributeObserver.pause(() => setAttribute(el, mutation.attributeName, mutation.oldValue));
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
function setAttribute(el, name, value) {
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
function removeAttribute(el, name) {
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
function setStyle(el, style, value) {
  let currentValue = el.style[style];
  el.style[style] = value;
  return () => {
    el.style[style] = currentValue;
  };
}
function defineElement(alias, customElementConstructor) {
  customElements.define(`ddfsn-${alias}`, customElementConstructor);
}

// resources/js/elements.js
var DDFSNElement = class extends HTMLElement {
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
};

// resources/js/events.js
var Observable = class {
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
};

// resources/js/sidebar.js
var SIDEBAR_EVENTS = {
  BREAKPOINT_UP: "sidebar:breakpoint:up",
  BREAKPOINT_DOWN: "sidebar:breakpoint:down",
  COLLAPSE: "sidebar:collapse",
  COLLAPSED: "sidebar:collapsed",
  EXPAND: "sidebar:expand",
  EXPANDED: "sidebar:expanded",
  TOGGLE: "sidebar:toggle"
};
var SidebarsViewportResizeObserver = class {
  constructor(observable, { breakpoint }) {
    this.observable = observable;
    this.breakpoint = breakpoint;
    this.watchForViewportChanges();
  }
  watchForViewportChanges() {
    let breakpoint = typeof this.breakpoint === "number" ? `${this.breakpoint}px` : this.breakpoint;
    this.viewport = matchMedia(`(min-width: ${breakpoint})`);
    this.handleViewportChange = () => {
      this.viewport.matches ? this.observable.notify(SIDEBAR_EVENTS.BREAKPOINT_UP) : this.observable.notify(SIDEBAR_EVENTS.BREAKPOINT_DOWN);
    };
    this.handleViewportChange();
    this.viewport.addEventListener("change", this.handleViewportChange);
  }
  disconnect() {
    this.viewport.removeEventListener("change", this.handleViewportChange);
  }
};
var Sidebar = class extends DDFSNElement {
  boot() {
    this.config = {
      breakpoint: this.hasAttribute("breakpoint") ? this.getAttribute("breakpoint") : 1024,
      sticky: this.hasAttribute("sticky"),
      fixed: this.hasAttribute("fixed")
    };
    this.state = {
      collapsed: false,
      breakpointUp: true,
      breakpointDown: false
    };
    this.observable = new Observable();
    if (this.config.sticky) {
      this.setStickyPositionStyles();
    }
    this.removeAttribute("data-ddfsn-sidebar-cloak");
    this.observable.subscribe(SIDEBAR_EVENTS.BREAKPOINT_UP, () => {
      let reapplyTransition = setStyle(this, "transition", "none");
      setTimeout(reapplyTransition);
      this.state.collapsed = false;
      this.state.breakpointUp = true;
      this.state.breakpointDown = false;
      this.updateDataAttributes(this);
      this.observable.notify(SIDEBAR_EVENTS.EXPANDED);
    });
    this.observable.subscribe(SIDEBAR_EVENTS.BREAKPOINT_DOWN, () => {
      let reapplyTransition = setStyle(this, "transition", "none");
      setTimeout(reapplyTransition);
      this.state.collapsed = true;
      this.state.breakpointUp = false;
      this.state.breakpointDown = true;
      this.updateDataAttributes(this);
      this.observable.notify(SIDEBAR_EVENTS.COLLAPSED);
    });
    this.observable.subscribe(SIDEBAR_EVENTS.COLLAPSE, () => {
      this.state.collapsed = true;
      this.updateDataAttributes(this);
      this.observable.notify(SIDEBAR_EVENTS.COLLAPSED);
    });
    this.observable.subscribe(SIDEBAR_EVENTS.EXPAND, () => {
      this.state.collapsed = false;
      this.updateDataAttributes(this);
      this.observable.notify(SIDEBAR_EVENTS.EXPANDED);
    });
    let viewportObserver = new SidebarsViewportResizeObserver(this.observable, this.config);
    this.onUnmount(() => viewportObserver.disconnect());
    let onSidebarToggle = () => {
      this.state.collapsed ? this.observable.notify(SIDEBAR_EVENTS.EXPAND) : this.observable.notify(SIDEBAR_EVENTS.COLLAPSE);
    };
    document.addEventListener(SIDEBAR_EVENTS.TOGGLE, onSidebarToggle);
    this.onUnmount(() => document.removeEventListener(SIDEBAR_EVENTS.TOGGLE, onSidebarToggle));
  }
  setStickyPositionStyles() {
    let offsetTop = this.offsetTop;
    let pageScrollYValue = window.pageYOffset;
    if (pageScrollYValue > 0) {
      window.scrollTo(window.scrollX, 0);
      offsetTop = this.offsetTop;
      window.scrollTo(window.scrollX, pageScrollYValue);
    }
    this.style.position = "sticky";
    this.style.top = offsetTop + "px";
    this.style.maxHeight = `calc(100dvh - ${offsetTop}px)`;
  }
  updateDataAttributes(el) {
    if (this.state.breakpointUp) {
      removeAttribute(el, "data-ddfsn-sidebar-breakpoint-down");
      setAttribute(el, "data-ddfsn-sidebar-breakpoint-up", "");
    } else {
      removeAttribute(el, "data-ddfsn-sidebar-breakpoint-up");
      setAttribute(el, "data-ddfsn-sidebar-breakpoint-down", "");
    }
    if (this.state.collapsed) {
      removeAttribute(el, "data-ddfsn-sidebar-expanded");
      setAttribute(el, "data-ddfsn-sidebar-collapsed", "");
    } else {
      removeAttribute(el, "data-ddfsn-sidebar-collapsed");
      setAttribute(el, "data-ddfsn-sidebar-expanded", "");
    }
  }
};
var SidebarToggle = class extends DDFSNElement {
  mount() {
    let button = this.querySelector("button,[data-slot='button']") || this;
    button.addEventListener("click", () => {
      this.dispatchEvent(new CustomEvent(SIDEBAR_EVENTS.TOGGLE, { bubbles: true }));
    });
    queueMicrotask(() => {
      let sidebar = document.querySelector("ddfsn-sidebar");
      if (!sidebar) {
        return;
      }
      sidebar.updateDataAttributes(this);
      sidebar.observable.subscribe(SIDEBAR_EVENTS.COLLAPSED, () => sidebar.updateDataAttributes(this));
      sidebar.observable.subscribe(SIDEBAR_EVENTS.EXPANDED, () => sidebar.updateDataAttributes(this));
    });
  }
};

// resources/js/state.js
var State = class {
  boot() {
    let Alpine = window.Alpine;
    let applyAppearance = window.DDFSN?.applyAppearance;
    if (!applyAppearance) {
      applyAppearance = () => {
      };
      window.localStorage.removeItem("ddfsn.appearance");
    }
    let ddfsn = Alpine.reactive({
      appearance: window.localStorage.getItem("ddfsn.appearance") || "system",
      triggerReactivityCounter: 1,
      get dark() {
        JSON.stringify(ddfsn.triggerReactivityCounter);
        if (ddfsn.appearance === "system") {
          let media = window.matchMedia("(prefers-color-scheme: dark)");
          return media.matches;
        }
        return ddfsn.appearance === "dark";
      },
      set dark(apply) {
        let isDark = this.dark;
        if (apply === isDark) {
          return;
        }
        ddfsn.appearance = apply ? "dark" : "light";
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
    setAttribute(document.documentElement, "data-ddfsn-pause-transitions", true);
  }
  resumeTransitions() {
    requestAnimationFrame(() => requestAnimationFrame(
      () => removeAttribute(document.documentElement, "data-ddfsn-pause-transitions")
    ));
  }
};

// resources/js/index.js
defineElement("sidebar", Sidebar);
defineElement("sidebar-toggle", SidebarToggle);
document.addEventListener("alpine:init", () => {
  let state = new State();
  state.boot();
});
//# sourceMappingURL=blade-components.esm.js.map

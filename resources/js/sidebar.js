import { DDFSNElement } from './elements.js';
import { Observable } from './events.js';
import { setStyle, setAttribute, removeAttribute } from './utils.js';

const SIDEBAR_EVENTS = {
    BREAKPOINT_UP: "sidebar:breakpoint:up",
    BREAKPOINT_DOWN: "sidebar:breakpoint:down",

    COLLAPSE: "sidebar:collapse",
    COLLAPSED: "sidebar:collapsed",

    EXPAND: "sidebar:expand",
    EXPANDED: "sidebar:expanded",

    TOGGLE: "sidebar:toggle",
};

class SidebarsViewportResizeObserver {
    constructor(observable, { breakpoint }) {
        this.observable = observable;
        this.breakpoint = breakpoint;

        this.watchForViewportChanges();
    }

    watchForViewportChanges() {
        let breakpoint = typeof this.breakpoint === "number"
            ? `${this.breakpoint}px`
            : this.breakpoint;

        this.viewport = matchMedia(`(min-width: ${breakpoint})`);

        this.handleViewportChange = () => {
            this.viewport.matches
                ? this.observable.notify(SIDEBAR_EVENTS.BREAKPOINT_UP)
                : this.observable.notify(SIDEBAR_EVENTS.BREAKPOINT_DOWN);
        };

        this.handleViewportChange();

        this.viewport.addEventListener("change", this.handleViewportChange);
    }

    disconnect() {
        this.viewport.removeEventListener("change", this.handleViewportChange);
    }
}

export class Sidebar extends DDFSNElement {
    boot() {
        this.config = {
            breakpoint: this.hasAttribute("breakpoint")
                ? this.getAttribute("breakpoint")
                : 1024,
            sticky: this.hasAttribute("sticky"),
            fixed: this.hasAttribute("fixed"),
        };

        this.state = {
            collapsed: false,

            breakpointUp: true,
            breakpointDown: false,
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
            this.state.collapsed
                ? this.observable.notify(SIDEBAR_EVENTS.EXPAND)
                : this.observable.notify(SIDEBAR_EVENTS.COLLAPSE);
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
        // Breakpoint identification...
        if (this.state.breakpointUp) {
            removeAttribute(el, "data-ddfsn-sidebar-breakpoint-down");
            setAttribute(el, "data-ddfsn-sidebar-breakpoint-up", "");
        } else {
            removeAttribute(el, "data-ddfsn-sidebar-breakpoint-up");
            setAttribute(el, "data-ddfsn-sidebar-breakpoint-down", "");
        }

        // Collapsed state...
        if (this.state.collapsed) {
            removeAttribute(el, "data-ddfsn-sidebar-expanded");
            setAttribute(el, "data-ddfsn-sidebar-collapsed", "");
        } else {
            removeAttribute(el, "data-ddfsn-sidebar-collapsed");
            setAttribute(el, "data-ddfsn-sidebar-expanded", "");
        }
    }
}

export class SidebarToggle extends DDFSNElement {
    mount() {
        let button = this.querySelector("button,[data-slot='button']") || this;

        button.addEventListener("click", () => {
            this.dispatchEvent(new CustomEvent(SIDEBAR_EVENTS.TOGGLE, { bubbles: true }))
        });

        queueMicrotask(() => {
            let sidebar = document.querySelector("ddfsn-sidebar");

            if (! sidebar) {
                return
            }

            sidebar.updateDataAttributes(this);
            sidebar.observable.subscribe(SIDEBAR_EVENTS.COLLAPSED, () => sidebar.updateDataAttributes(this));
            sidebar.observable.subscribe(SIDEBAR_EVENTS.EXPANDED, () => sidebar.updateDataAttributes(this));
        });
    }
}

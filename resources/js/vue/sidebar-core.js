import { setStyle } from '../utils.js';

export const SIDEBAR_EVENTS = {
    BREAKPOINT_UP: "sidebar:breakpoint:up",
    BREAKPOINT_DOWN: "sidebar:breakpoint:down",

    COLLAPSE: "sidebar:collapse",
    COLLAPSED: "sidebar:collapsed",

    EXPAND: "sidebar:expand",
    EXPANDED: "sidebar:expanded",

    TOGGLE: "sidebar:toggle",
};

export const SIDEBAR_STATE_ATTRIBUTES = [
    "data-ddfsn-sidebar-breakpoint-up",
    "data-ddfsn-sidebar-breakpoint-down",
    "data-ddfsn-sidebar-collapsed",
    "data-ddfsn-sidebar-expanded",
];

export function watchSidebarBreakpoint(breakpoint, onChange) {
    let query = typeof breakpoint === "number"
        ? `(min-width: ${breakpoint}px)`
        : `(min-width: ${breakpoint})`;

    let viewport = matchMedia(query);

    let handleViewportChange = () => onChange(viewport.matches);

    handleViewportChange();

    viewport.addEventListener("change", handleViewportChange);

    return () => viewport.removeEventListener("change", handleViewportChange);
}

export function applySidebarStickyPosition(el) {
    let offsetTop = el.offsetTop;
    let pageScrollYValue = window.pageYOffset;

    if (pageScrollYValue > 0) {
        window.scrollTo(window.scrollX, 0);
        offsetTop = el.offsetTop;
        window.scrollTo(window.scrollX, pageScrollYValue);
    }

    el.style.position = "sticky";
    el.style.top = offsetTop + "px";
    el.style.maxHeight = `calc(100dvh - ${offsetTop}px)`;
}

export function suppressSidebarTransitions(el) {
    let reapplyTransition = setStyle(el, "transition", "none");

    setTimeout(reapplyTransition);
}

export function applySidebarDataAttributes(el, state) {
    if (! el) {
        return;
    }

    // Breakpoint identification...
    if (state.breakpointUp) {
        el.removeAttribute("data-ddfsn-sidebar-breakpoint-down");
        el.setAttribute("data-ddfsn-sidebar-breakpoint-up", "");
    } else {
        el.removeAttribute("data-ddfsn-sidebar-breakpoint-up");
        el.setAttribute("data-ddfsn-sidebar-breakpoint-down", "");
    }

    // Collapsed state...
    if (state.collapsed) {
        el.removeAttribute("data-ddfsn-sidebar-expanded");
        el.setAttribute("data-ddfsn-sidebar-collapsed", "");
    } else {
        el.removeAttribute("data-ddfsn-sidebar-collapsed");
        el.setAttribute("data-ddfsn-sidebar-expanded", "");
    }
}

export function syncSidebarStateAttributes(from, to) {
    if (! from || ! to) {
        return;
    }

    SIDEBAR_STATE_ATTRIBUTES.forEach((name) => {
        from.hasAttribute(name)
            ? to.setAttribute(name, from.getAttribute(name))
            : to.removeAttribute(name);
    });
}

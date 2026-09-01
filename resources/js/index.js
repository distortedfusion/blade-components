import { defineElement } from './utils.js'
import { Sidebar, SidebarToggle } from './sidebar.js'
import { State } from './state.js'

defineElement("sidebar", Sidebar);
defineElement("sidebar-toggle", SidebarToggle);

document.addEventListener('alpine:init', () => {
    let state = new State();

    state.boot();
});

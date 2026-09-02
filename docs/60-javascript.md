---
title: JavaScript
description: Blade Components ships a small vanilla JavaScript layer, plus an optional Vue 3 variant of the same behaviour, written in plain JavaScript without TypeScript.
---

## Vanilla layer

By default Blade Components ships a vanilla JavaScript layer: the `ddfsn-sidebar` and `ddfsn-sidebar-toggle` custom elements and an Alpine.js powered appearance state module. It is loaded through the package's asset manager and requires no build step in your application. See the [layouts](/docs/layouts/sidebar) documentation for its usage.

## Vue 3 variant

An alternative build of the same behaviour is available for applications that use Vue, implemented without Alpine.js. The variant is written in **plain JavaScript — no TypeScript** is used or required.

Vue itself (`^3.5`) is expected to be provided by your application: it is marked as external in every build artifact, so it is never bundled and never duplicated.

### Opting in

The asset manager serves the vanilla (`blade`) layer by default. Publish the configuration file and switch the variant to serve the Vue artifacts through `@ddfsnScripts` instead:

```php
// config/blade-components.php
'javascript' => env('BLADE_COMPONENTS_JAVASCRIPT', 'blade'), // "blade" or "vue"
```

Switching the variant only changes which bundle the `/ddfsn/blade-components(.min).js` routes serve and which manifest hash `@ddfsnScripts` links — the URLs and the directive API stay the same. Because the served build is the IIFE bundle described under CDN usage, load Vue's browser build before `@ddfsnScripts` when the `vue` variant is enabled.

### Bundler usage

```js
import { createApp } from 'vue';
import DdfsnVue from 'blade-components/vue';

createApp({})
    .use(DdfsnVue)
    .mount('#app');
```

The `blade-components/vue` subpath resolves to `dist/blade-components-vue.esm.js`. Prefer registering the plugin so the components and the appearance state boot together, or import the named exports (`DdfsnSidebar`, `DdfsnSidebarToggle`, `useDdfsn`, `SIDEBAR_EVENTS`) directly.

### CDN usage

```html
<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="dist/blade-components-vue.js"></script>
```

The IIFE builds (`blade-components-vue.js` and `blade-components-vue.min.js`) read the global `Vue` exposed by Vue's browser builds, so Vue must be loaded first. The bundle exposes itself as the `DdfsnVue` global — install the plugin and/or use the named exports:

```html
<script>
    const app = Vue.createApp({ /* ... */ });

    app.use(DdfsnVue.default); // registers every Ddfsn* component globally

    // or register components individually:
    // app.component('DdfsnBtn', DdfsnVue.DdfsnBtn);
</script>
```

### Sidebar components

The components ship as single-file components in `resources/js/vue/components/` (`<template>`, `<script setup>`) and are compiled by the package's esbuild build.

```html
<DdfsnSidebarToggle>
    <button type="button">Toggle</button>
</DdfsnSidebarToggle>

<DdfsnSidebar breakpoint="1024" sticky>
    <!-- sidebar content -->
</DdfsnSidebar>
```

`DdfsnSidebar` renders the vanilla element name (`ddfsn-sidebar`) by default and accepts a `tag` prop for a native element override (dash names resolve as components and recurse). `DdfsnSidebarToggle` mirrors Blade and renders a ghost icon button; `DdfsnSidebarBackdrop` renders the raw `ddfsn-sidebar-toggle` element as a fixed overlay. They keep the vanilla contract intact: the same `data-ddfsn-sidebar-*` state attributes are applied for CSS, the same `sidebar:toggle`, `sidebar:collapsed` and `sidebar:expanded` DOM events are used, and `expand`, `collapse` and `toggle` are exposed through template refs. Vue `collapsed`, `expanded`, `breakpoint-up` and `breakpoint-down` events are emitted in addition. The sidebar also ships the Blade view's default classes — `[grid-area:sidebar]`, background, border, width, padding and the collapse/cloak behaviour — so it lands correctly in the layout grid from `blade-components.css`.

The components ship without style blocks: styling is owned by your application's Tailwind build.

If you author your own single-file components that reference these element names, tell Vue's SFC compiler they are custom elements (`compilerOptions: { isCustomElement: tag => tag.includes('-') }`); otherwise the compiler resolves them as components.

### Appearance state

```js
import { useDdfsn } from 'blade-components/vue';

const ddfsn = useDdfsn();

ddfsn.dark;            // computed, reflects 'system' | 'light' | 'dark'
ddfsn.dark = true;     // writable, stores 'dark' or 'light'
ddfsn.appearance.value; // ref: 'system' | 'light' | 'dark'
ddfsn.setAppearance('system');
ddfsn.toggle();
```

The composable is a singleton that mirrors the vanilla behaviour: the layout-provided `@ddfsnAppearance` hook persists the preference and toggles the `dark` class, the system preference is followed while set to `system`, transitions are paused on media and Livewire navigation changes, and the `window.DDFSN` contract is kept so Blade markup and Alpine widgets stay in sync. Without the hook the stored preference is reset, exactly like the vanilla layer.

### Parallax

`useParallax` is a small, dependency-free scroll composable. Bind the returned `target` ref to any element and the returned `style` drifts it as it traverses the viewport, honouring `prefers-reduced-motion`:

```html
<script setup>
import { useParallax } from 'blade-components/vue';

const { target, style } = useParallax({ speed: 0.2 });
</script>

<template>
    <div ref="target" :style="style">
        <!-- hero / decorative layer -->
    </div>
</template>
```

The element's traversal is exposed as `progress` (0 when it enters at the bottom of the viewport, 1 when it leaves at the top) and the drift as `offset` in pixels — both are plain refs for building custom effects. `speed` is the fraction of the viewport height the element drifts per traversal (default `0.2`). Updates are rAF-throttled, listeners are passive and cleaned up on unmount.

### Single-page usage (Inertia)

The variant is router-agnostic: it integrates with whatever mounts your Vue application. For Laravel apps, [Inertia.js](https://inertiajs.com/) is the natural fit — server-side routes, no API layer, client-side rendering. Register the plugin once and render the sidebar in a persistent layout so its state survives navigation:

```js
// resources/js/app.js
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import DdfsnVue from 'blade-components/vue';

createInertiaApp({
    resolve: (name) => import(`./Pages/${name}.vue`),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(DdfsnVue)
            .mount(el);
    },
});
```

```html
<!-- resources/js/Layouts/AppLayout.vue -->
<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <DdfsnSidebar breakpoint="1024" sticky>
        <nav>
            <Link href="/">Dashboard</Link>
        </nav>

        <slot />
    </DdfsnSidebar>
</template>
```

Pages resolved by Inertia render into the layout's `<slot />`; the sidebar, its collapsed state and the appearance preference persist across visits without a full reload. A Vue Router SPA works the same way: install the plugin in the application that owns the persistent layout and let `<RouterView />` take the slot's place.

### Components

The variant ports the full Blade component set as single-file components (`<template>` + `<script setup>`, no style blocks — your Tailwind build owns the styling). The default plugin install registers every `Ddfsn*` component globally, and each is also a named export:

- **Accordion**: `DdfsnAccordion`, `DdfsnAccordionItem`, `DdfsnAccordionTitle`, `DdfsnAccordionToggle`, `DdfsnAccordionContent`
- **Buttons & badges**: `DdfsnBtn`, `DdfsnBtnGroup`, `DdfsnBadge`, `DdfsnKbd`, `DdfsnKbdGroup`
- **Loading**: `DdfsnPulser`, `DdfsnSpinner`, `DdfsnThreeDot`
- **Cards & avatars**: `DdfsnCard`, `DdfsnCardHeader`, `DdfsnCardBody`, `DdfsnCardFooter`, `DdfsnCardTitle`, `DdfsnAvatar`, `DdfsnAvatarStack`
- **Breadcrumb**: `DdfsnBreadcrumb`, `DdfsnBreadcrumbItem`, `DdfsnBreadcrumbEllipsis`, `DdfsnBreadcrumbSeparator`
- **Tables**: `DdfsnTable`, `DdfsnTableHeader`, `DdfsnTableHead`, `DdfsnTableBody`, `DdfsnTableRow`, `DdfsnTableCell`, `DdfsnTableCaption`
- **Lists**: `DdfsnListGroup`, `DdfsnListGroupItem`, `DdfsnListGroupItemTitle`
- **Layout**: `DdfsnContainer`, `DdfsnHeader`, `DdfsnFooter`, `DdfsnMain`, `DdfsnLayoutIcon`, `DdfsnSidebarBackdrop`, `DdfsnSidebar`, `DdfsnSidebarToggle`
- **Primitives**: `DdfsnAlert`, `DdfsnEmpty`, `DdfsnProgressBar`, `DdfsnSeparator`, `DdfsnStack`
- **Text**: `DdfsnHeading`, `DdfsnParagraph`, `DdfsnDescription`, `DdfsnPre`, `DdfsnOl`, `DdfsnUl`, `DdfsnCurrency`, `DdfsnNumber`, `DdfsnDateTime`

Porting notes:

- Icons: Blade accepted heroicon *name* strings (`$icon`); the Vue components expect an icon *component* via the `icon` prop or an `icon` / `indicator` slot, since heroicons are not bundled.
- The Blade `style` prop is named `variant` in the Vue components (`<DdfsnBtn variant="secondary">`). Vue parses `style` attributes as CSS before props are validated, so a `style="secondary"` string would silently arrive as an empty object.
- `DdfsnSidebar` / `DdfsnSidebarToggle` render the vanilla element names (`ddfsn-sidebar`, `ddfsn-sidebar-toggle`) as native custom elements. Their `tag` override only accepts native tags — a dash name would be resolved as a registered component and recurse.
- Blade `@aware` propagation (table hover/caption, list group style) has no Vue equivalent — pass the props down explicitly.
- The accordion state lives in `DdfsnAccordion` and reaches the items via provide/inject; the collapse animation is a JS height transition mirroring Alpine's `x-collapse`.
- `DdfsnCurrency` / `DdfsnNumber` / `DdfsnDateTime` format with `Intl.NumberFormat` / `Intl.DateTimeFormat` using the runtime locale; `DdfsnDateTime` takes Intl options as its `format` prop and approximates `diffForHumans()` with `Intl.RelativeTimeFormat`.

### Notes

- Do not load the vanilla and Vue bundles together; they implement the same element names and events.
- The variant is self-contained in `resources/js/vue/` and the original vanilla layer is left untouched, so upstream updates to the original files never conflict.

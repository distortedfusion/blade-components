---
title: Header
description: Build a top-navigation layout with a fixed or sticky header spanning the viewport, composing your brand and primary navigation. Combine it with a off-canvas drawer on mobile.
---

```blade-component
<x-docs.preview href="/demos/header" :medias="[
    ['path' => 'demos/header-light.png', 'width' => 702, 'height' => 395, 'dark' => false, 'alt' => 'Basic header layout'],
    ['path' => 'demos/header-dark.png', 'width' => 702, 'height' => 395, 'dark' => true, 'alt' => 'Basic header layout'],
]" aspect="video" />
```

```blade
<head>
    <!-- ... -->

    @ddfsnAppearance
    @ddfsnStyles
</head>
<body class="min-h-screen bg-[color-mix(in_oklab,var(--accent)_30%,var(--background))] text-[var(--foreground)] antialiased">
    <x-header class="[&>[data-slot=container]]:px-4" container="full" sticky>
        <div class="flex items-center justify-between gap-3">
            <x-sidebar-toggle class="lg:hidden -ml-2" />

            <div class="max-lg:hidden flex-1 flex items-center gap-4">
                <x-layout.icon
                    icon="heroicon-o-bolt"
                    style="primary"
                    size="sm"
                    :aria-label="config('app.name')" />
                <nav aria-label="Main">
                    <ul class="flex items-center gap-1">
                        <li>
                            <x-btn href="#" size="sm" style="ghost">
                                <span>Overview</span>
                            </x-btn>
                        </li>
                        <!-- ... -->
                    </ul>
                </nav>
            </div>

            <x-avatar
                size="sm"
                src="/assets/avatar.jpeg"
                srcset="/assets/avatar@2x.jpeg 2x"
                alt="Kevin Dierkx" />
        </div>
    </x-header>

    <x-sidebar class="lg:hidden">
        <ddfsn-sidebar-toggle>
            <x-btn
                style="ghost"
                size="icon"
                aria-label="{{ __('Close sidebar') }}">
                <x-heroicon-o-x-mark class="text-[var(--muted-foreground)]" />
            </x-btn>
        </ddfsn-sidebar-toggle>

        <nav aria-label="Main">
            <ul class="[&>li:not(:last-child)]:mb-1 [&_[data-slot=button]]:w-full [&_[data-slot=button]]:justify-start">
                <li>
                    <x-btn href="#" size="sm" style="ghost">
                        Overview
                    </x-btn>
                </li>
            </ul>
        </nav>

        <!-- ... -->
    </x-sidebar>

    <x-main container="md">
        <!-- ... -->
    </x-main>

    @ddfsnScripts
</body>
```

## Secondary sidebar

Add a secondary sidebar alongside the header layout for contextual navigation or supplementary content, sitting between the header and your main content area.

```blade-component
<x-docs.preview href="/demos/header-with-sidebar" :medias="[
    ['path' => 'demos/header-with-sidebar-light.png', 'width' => 702, 'height' => 395, 'dark' => false, 'alt' => 'Header layout with sidebar'],
    ['path' => 'demos/header-with-sidebar-dark.png', 'width' => 702, 'height' => 395, 'dark' => true, 'alt' => 'Header layout with sidebar'],
]" aspect="video" />
```

```blade
<head>
    <!-- ... -->

    @ddfsnAppearance
    @ddfsnStyles
</head>
<body class="min-h-screen bg-[color-mix(in_oklab,var(--accent)_30%,var(--background))] text-[var(--foreground)] antialiased">
    <x-header class="[&>[data-slot=container]]:px-4" container="full" sticky>
        <div class="flex items-center justify-between gap-3">
            <x-sidebar-toggle class="lg:hidden -ml-2" />

            <div class="max-lg:hidden flex-1 flex items-center gap-4">
                <x-layout.icon
                    icon="heroicon-o-bolt"
                    style="primary"
                    size="sm"
                    :aria-label="config('app.name')" />
                <nav aria-label="Main">
                    <ul class="flex items-center gap-1">
                        <li>
                            <x-btn href="#" size="sm" style="ghost">
                                <span>Overview</span>
                            </x-btn>
                        </li>
                        <!-- ... -->
                    </ul>
                </nav>
            </div>

            <x-avatar
                size="sm"
                src="/assets/avatar.jpeg"
                srcset="/assets/avatar@2x.jpeg 2x"
                alt="Kevin Dierkx" />
        </div>
    </x-header>

    <x-sidebar class="max-lg:pt-0 lg:bg-transparent" sticky>
        <ddfsn-sidebar-toggle class="lg:hidden">
            <x-btn
                class="border-0 -mr-2"
                style="ghost"
                size="icon"
                aria-label="{{ __('Close sidebar') }}">
                <x-heroicon-o-x-mark class="text-[var(--muted-foreground)]" />
            </x-btn>
        </ddfsn-sidebar-toggle>

        <nav aria-label="Main">
            <ul class="[&>li:not(:last-child)]:mb-1 [&_[data-slot=button]]:w-full [&_[data-slot=button]]:justify-start">
                <li>
                    <x-btn href="#" size="sm" style="ghost">
                        Overview
                    </x-btn>
                </li>
            </ul>
        </nav>

        <!-- ... -->
    </x-sidebar>

    <x-main container="md">
        <!-- ... -->
    </x-main>

    @ddfsnScripts
</body>
```

## Component API

### x-sidebar

| Attribute | Default | Description                                                    |
| --------- | ------- | -------------------------------------------------------------- |
| `sticky`  | `false` | `bool`<br>When present, applies sticky styling to the sidebar. |
| `fixed`   | `false` | `bool`<br>When present, applies fixed styling to the sidebar.  |

### x-header

| Attribute   | Default | Description                                                                                                       |
| ----------- | ------- | ----------------------------------------------------------------------------------------------------------------- |
| `container` | `null`  | `string` &#124;&#124; `null`<br>When set, adds a `x-container` element. Maps to the container's `size` attribute. |
| `sticky`    | `false` | `bool`<br>When present, applies sticky styling to the header.                                                     |
| `fixed`     | `false` | `bool`<br>When present, applies fixed styling to the header.                                                      |

### x-main

| Attribute   | Default | Description                                                                                                       |
| ----------- | ------- | ----------------------------------------------------------------------------------------------------------------- |
| `container` | `null`  | `string` &#124;&#124; `null`<br>When set, adds a `x-container` element. Maps to the container's `size` attribute. |

### x-footer

| Attribute   | Default | Description                                                                                                       |
| ----------- | ------- | ----------------------------------------------------------------------------------------------------------------- |
| `container` | `null`  | `string` &#124;&#124; `null`<br>When set, adds a `x-container` element. Maps to the container's `size` attribute. |

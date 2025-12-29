---
title: Layout Icon
description: A contained icon to be used to differentiate layout components.
short-description: Use an icon to represent layout components.
icon: fasl-image-user
---

```blade-component-preview
<div class="mx-auto">
    <x-layout.icon icon="heroicon-o-cube-transparent" />
</div>
```

## Usage

```html
<x-layout.icon icon="heroicon-o-cube-transparent" />
```

### Component API

| Attribute | Default   | Description                                                      |
| --------- | --------- | ---------------------------------------------------------------- |
| `style`   | `primary` | `string`<br>Possible values `primary`, `secondary` or `outline`. |
| `size`    | `default` | `string`<br>Possible values `default`, `xs`, `sm`, or `lg`.      |

## Style

Control the icon style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-layout.icon icon="heroicon-o-cube-transparent" />
    <x-layout.icon icon="heroicon-o-cube-transparent" style="secondary" />
    <x-layout.icon icon="heroicon-o-cube-transparent" style="outline" />
</div>
```

## Size

Control the icon size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-layout.icon icon="heroicon-o-cube-transparent" size="xs" />
    <x-layout.icon icon="heroicon-o-cube-transparent" size="sm" />
    <x-layout.icon icon="heroicon-o-cube-transparent" />
    <x-layout.icon icon="heroicon-o-cube-transparent" size="lg" />
</div>
```

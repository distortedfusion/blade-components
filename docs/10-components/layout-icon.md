---
title: Layout Icon
description: A contained icon to be used to differentiate layout components.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-60">
    <x-layout.icon icon="heroicon-o-cube-transparent" />
</div>
```

## Usage

```html
<x-layout.icon icon="heroicon-o-cube-transparent" />
```

### Component API

| Attribute | Default   | Description                                                                  |
| --------- | --------- | ---------------------------------------------------------------------------- |
| `style`   | `primary` | `string`<br>Possible values `primary`, `secondary` or `outline`.             |
| `size`    | `null`    | `string` &#124;&#124; `null`<br>Possible values `null`, `xs`, `sm`, or `lg`. |

## Style

Control the icon style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-center justify-center gap-x-4">
    <x-layout.icon icon="heroicon-o-cube-transparent" style="primary" />
    <x-layout.icon icon="heroicon-o-cube-transparent" style="secondary" />
    <x-layout.icon icon="heroicon-o-cube-transparent" style="outline" />
</div>
```

## Size

Control the icon size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-center justify-between space-x-2">
    <x-layout.icon icon="heroicon-o-cube-transparent" size="lg" />
    <x-layout.icon icon="heroicon-o-cube-transparent" />
    <x-layout.icon icon="heroicon-o-cube-transparent" size="sm" />
</div>
```

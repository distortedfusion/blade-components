---
title: Icon
description: A contained icon to be used to differentiate layout components.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-40">
    <x-layout.icon icon="heroicon-o-cube-transparent" />
</div>
```

## Usage

```html
<x-btn>Button</x-btn>
```

### Component API

| Attribute | Default   | Description                                                            |
| --------- | --------- | ---------------------------------------------------------------------- |
| `style`   | `primary` | `string`<br>Possible values `primary`, or `secondary`.                 |
| `size`    | `null`    | `string` &#124;&#124; `null`<br>Possible values `null`, `sm`, or `lg`. |

## Style

Control the icon style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex justify-center">
    <x-layout.icon icon="heroicon-o-cube-transparent" style="primary" />
</div>
```
```blade-component-code
<div class="flex justify-center">
    <x-layout.icon icon="heroicon-o-cube-transparent" style="secondary" />
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

---
title: Three Dot
description: Indicate an action is running in the background.
short-description: Show that a process is running in the background.
icon: fasl-ellipsis
---

```blade-component-preview
<div class="mx-auto">
    <x-three-dot />
</div>
```

## Usage

```html
<x-three-dot />
```

### Component API

| Attribute | Default   | Description                                                                                   |
| --------- | --------- | --------------------------------------------------------------------------------------------- |
| `style`   | `primary` | `string`<br>Possible values `primary`, `success`, `info`, `warning` or `danger`. |

## Style

Control the three-dot style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-center justify-center space-x-4">
    <x-three-dot />
    <x-three-dot style="success" />
    <x-three-dot style="info" />
    <x-three-dot style="warning" />
    <x-three-dot style="danger" />
</div>
```

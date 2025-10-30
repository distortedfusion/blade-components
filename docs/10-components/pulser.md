---
title: Pulser
description: A subtle, pulsing dot used to highlight notifications or important statuses.
short-description: Highlight notifications with a subtle pulsing dot.
icon: fasl-radar
---

```blade-component-preview
<div class="mx-auto">
    <x-pulser />
</div>
```

## Usage

```html
<x-pulser />
```

### Component API

| Attribute | Default   | Description                                                                                   |
| --------- | --------- | --------------------------------------------------------------------------------------------- |
| `style`   | `primary` | `string`<br>Possible values `primary`, `success`, `info`, `warning` or `danger`. |

## Style

Control the pulser style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-center justify-center space-x-4">
    <x-pulser />
    <x-pulser style="success" />
    <x-pulser style="info" />
    <x-pulser style="warning" />
    <x-pulser style="danger" />
</div>
```

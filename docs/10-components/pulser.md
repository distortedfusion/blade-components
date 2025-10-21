---
title: Pulser
description: A subtle, pulsing dot used to highlight notifications or important statuses.
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
| `style`   | `default` | `string`<br>Possible values `default`, `success`, `info`, `warning` or `danger`. |

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

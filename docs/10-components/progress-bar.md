---
title: Progress Bar
description: Visually display progress.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-60">
    <x-progress-bar progress="75" class="max-w-96" />
</div>
```

## Usage

```html
<x-progress-bar progress="75" />
```

### Component API

| Attribute  | Default | Description                                                                 |
| ---------- | ------- | --------------------------------------------------------------------------- |
| `progress` | `0`     | `int`<br>Control the progress bar fill.                                     |
| `size`     | `null`  | `string` &#124;&#124; `null`<br>Possible values `null`, `sm`, or `lg`. |

## Progress

Control the progress bar fill by supplying the `progress=""` attribute.

```blade-component-code
<div class="space-y-8">
    <x-progress-bar progress="25" />
</div>
```

## Size

Control the progress bar size by supplying the `size=""` attribute.

```blade-component-code
<div class="space-y-8">
    <x-progress-bar progress="75" size="lg" />
    <x-progress-bar progress="75" />
    <x-progress-bar progress="75" size="sm" />
</div>
```

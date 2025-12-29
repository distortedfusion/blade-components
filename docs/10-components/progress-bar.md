---
title: Progress Bar
description: Visually display progress.
short-description: Show progress visually.
icon: fasl-bars-progress
---

```blade-component-preview
<div class="w-full max-w-96">
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
| `size`     | `default`  | `string`<br>Possible values `default`, `sm`, or `lg`. |

## Progress

Control the progress bar fill by supplying the `progress=""` attribute.

```blade-component-code
<x-progress-bar progress="25" />
```

## Size

Control the progress bar size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex flex-col gap-8">
    <x-progress-bar progress="75" size="sm" />
    <x-progress-bar progress="75" />
    <x-progress-bar progress="75" size="lg" />
</div>
```

---
title: Spinner
description: Indicate an action is running in the background after an action by the user.
short-description: Indicate background activity after a user action.
icon: fasl-spinner
---

```blade-component-preview
<div class="mx-auto">
    <x-spinner />
</div>
```

## Usage

```html
<x-spinner />
```

### Component API

| Attribute | Default | Description                                                            |
| --------- | ------- | ---------------------------------------------------------------------- |
| `size`    | `null`  | `string` &#124;&#124; `null`<br>Possible values `null`, `sm`, or `lg`. |

## Size

Control the spinner size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-center justify-between space-x-2">
    <x-spinner size="lg" />
    <x-spinner />
    <x-spinner size="sm" />
</div>
```

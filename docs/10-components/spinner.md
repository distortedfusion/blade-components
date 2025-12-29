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

| Attribute | Default   | Description                                                                      |
| --------- | --------- | -------------------------------------------------------------------------------- |
| `size`    | `default` | `string`<br>Possible values `default`, `sm`, or `lg`.                            |
| `style`   | `primary` | `string`<br>Possible values `primary`, `success`, `info`, `warning` or `danger`. |

## Size

Control the spinner size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-spinner size="sm" />
    <x-spinner />
    <x-spinner size="lg" />
</div>
```

## Style

Control the spinner style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-spinner />
    <x-spinner style="success" />
    <x-spinner style="info" />
    <x-spinner style="warning" />
    <x-spinner style="danger" />
</div>
```

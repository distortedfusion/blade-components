---
title: Badge
description: A contained label that shows the status of an element, emphasizes an element, or helps categorize an element with other similar elements.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-60">
    <x-badge>Badge</x-badge>
</div>
```

## Usage

```html
<x-badge>Badge</x-badge>
```

### Component API

| Attribute | Default   | Description                                                                                   |
| --------- | --------- | --------------------------------------------------------------------------------------------- |
| `style`   | `default` | `string`<br>Possible values `default`, `secondary`, `success`, `info`, `warning` or `danger`. |
| `icon`    | `null`    | `string` &#124;&#124; `null`                                                                  |

## Style

Control the badge style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex flex-col lg:flex-row items-center justify-between space-y-2 lg:space-y-0 lg:space-x-4">
    <x-badge>Badge Text</x-badge>
    <x-badge style="secondary">Badge Text</x-badge>
    <x-badge style="success">Badge Text</x-badge>
    <x-badge style="info">Badge Text</x-badge>
    <x-badge style="warning">Badge Text</x-badge>
    <x-badge style="danger">Badge Text</x-badge>
</div>
```

## Icon

You can control the icon per badge instance by supplying the `icon=""` attribute. Any [blade-ui-kit/blade-icons](https://github.com/blade-ui-kit/blade-icons) compatible icon set can be used.

```blade-component-code
<div class="flex justify-center">
    <x-badge icon="heroicon-o-star">Badge</x-badge>
</div>
```

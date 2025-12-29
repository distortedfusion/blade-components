---
title: Badge
description: A contained label that shows the status of an element, emphasizes an element, or helps categorize an element with other similar elements.
short-description: Highlight or categorize an element with a small label.
icon: fasl-tag
---

```blade-component-preview
<div class="mx-auto">
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
| `style`   | `primary` | `string`<br>Possible values `primary`, `secondary`, `success`, `info`, `warning` or `danger`. |
| `size`    | `default` | `string`<br>Possible values `default`, or `sm`.                                               |

## Size

Control the badge size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-badge style="secondary" size="sm">Small</x-badge>
    <x-badge style="secondary">Default</x-badge>
</div>
```


## Style

Control the badge style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-badge>Badge</x-badge>
    <x-badge style="secondary">Badge</x-badge>
    <x-badge style="success">Badge</x-badge>
    <x-badge style="info">Badge</x-badge>
    <x-badge style="warning">Badge</x-badge>
    <x-badge style="danger">Badge</x-badge>
</div>
```

## Icon

You can control the icon per badge instance by supplying the `icon=""` attribute. Any [blade-ui-kit/blade-icons](https://github.com/blade-ui-kit/blade-icons) compatible icon set can be used.

```blade-component-code
<div class="flex justify-center">
    <x-badge style="secondary">
        <x-heroicon-o-sparkles />
        Badge
    </x-badge>
</div>
```

---
title: Button
description: Primary control for any action, supporting both anchors and buttons.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-40">
    <x-btn>Button</x-btn>
</div>
```

## Usage

```html
<x-btn>Button</x-btn>
```

### Component API

| Attribute   | Default   | Description                                                                                           |
| ----------- | --------- | ----------------------------------------------------------------------------------------------------- |
| `style`     | `primary` | `string`<br>Possible values `primary`, `secondary`, `ghost`, `info`, `warning` or `danger`.           |
| `size`      | `null`    | `string` &#124;&#124; `null`<br>Possible values `null`, `sm`, `lg` or `xl`.                           |
| `href`      | `null`    | `string` &#124;&#124; `null`<br>When set, renders an `<a>` element instead of a `<button>` element.   |
| `alignment` | `center`  | `string`<br>Controls text alignment on the button label. Possible values `left`, `center` or `right`. |
| `disabled`  | `false`   | `bool`<br>Whether the button is disabled.                                                             |

## Style

Control the button style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex justify-between">
    <x-btn style="primary">Button</x-btn>
    <x-btn style="secondary">Button</x-btn>
    <x-btn style="ghost">Button</x-btn>
</div>
```

```blade-component-code
<div class="flex justify-between">
    <x-btn style="info">Button</x-btn>
    <x-btn style="warning">Button</x-btn>
    <x-btn style="danger">Button</x-btn>
</div>
```

## Size

Control the button size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex justify-between">
    <x-btn size="lg">Button</x-btn>
    <x-btn>Button</x-btn>
    <x-btn size="sm">Button</x-btn>
</div>
```

## Link

Buttons can be used as an `<a>` element by supplying the `href=""` attribute.

```blade-component-code
<div class="flex justify-center">
    <x-btn href="#">Button</x-btn>
</div>
```

## Disabled State

Both linked buttons and traditional buttons can be set to a disabled state by supplying the `disabled` boolean attribute.

```blade-component-code
<div class="flex justify-center">
    <x-btn disabled>Button</x-btn>
</div>
```

## Prefix and Suffix

Buttons can be prefixed or suffixed with simple text elements for additional clarity by utilizing the `prefix` and `suffix` component slots.

```blade-component-code
<div class="flex justify-between">
    <x-btn>
        <x-slot:prefix>
            <span class="text-gray-400">1.</span>
        </x-slot:prefix>
        Button
    </x-btn>
    <x-btn>
        <x-slot:prefix>
            <span class="text-gray-400">1.</span>
        </x-slot:prefix>
        Button
        <x-slot:suffix>
            <span class="text-gray-400">2.</span>
        </x-slot:suffix>
    </x-btn>
    <x-btn>
        Button
        <x-slot:suffix>
            <span class="text-gray-400">1.</span>
        </x-slot:suffix>
    </x-btn>
</div>
```

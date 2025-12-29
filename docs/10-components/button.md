---
title: Button
description: Primary control for any action, supporting both anchors and buttons.
short-description: Primary control for actions, supporting anchors or buttons.
icon: fasl-circle-dot
---

```blade-component-preview
<div class="flex items-center gap-2">
    <x-btn style="outline">Button</x-btn>
    <x-btn style="outline" size="icon">
        <x-heroicon-o-arrow-up-right />
    </x-btn>
</div>
```

## Usage

```html
<x-btn>Button</x-btn>
```

### Component API

| Attribute   | Default   | Description                                                                                                       |
| ----------- | --------- | ----------------------------------------------------------------------------------------------------------------- |
| `style`     | `primary` | `string`<br>Possible values `primary`, `secondary`, `outline`, `ghost`, `success`, `info`, `warning` or `danger`. |
| `size`      | `default` | `string`<br>Possible values `default`, `sm`, `lg`, `icon`, `icon-sm` or `icon-lg`.                                |
| `href`      | `null`    | `string` &#124;&#124; `null`<br>When set, renders an `<a>` element instead of a `<button>` element.               |
| `alignment` | `center`  | `string`<br>Controls text alignment on the button label. Possible values `left`, `center` or `right`.             |
| `disabled`  | `false`   | `bool`<br>Whether the button is disabled.                                                                         |

## Cursor

As of Tailwind v4 the default cursor behavior for buttons has [switched](https://tailwindcss.com/docs/upgrade-guide#buttons-use-the-default-cursor) from `cursor: pointer` to `cursor: default`.

If you want to keep the `cursor: pointer` behavior, add the following code to your CSS file:

```css
@layer base {
    button:not(:disabled),
    [role="button"]:not(:disabled) {
        cursor: pointer;
    }
}
```

## Size

Control the button size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <div class="flex items-center gap-2">
        <x-btn style="outline" size="sm">Small</x-btn>
        <x-btn style="outline" size="icon-sm">
            <x-heroicon-o-arrow-up-right />
        </x-btn>
    </div>

    <div class="flex items-center gap-2">
        <x-btn style="outline">Default</x-btn>
        <x-btn style="outline" size="icon">
            <x-heroicon-o-arrow-up-right />
        </x-btn>
    </div>

    <div class="flex items-center gap-2">
        <x-btn style="outline" size="lg">Large</x-btn>
        <x-btn style="outline" size="icon-lg">
            <x-heroicon-o-arrow-up-right />
        </x-btn>
    </div>
</div>
```

## Style

Control the button style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-btn style="primary">Button</x-btn>
    <x-btn style="secondary">Button</x-btn>
    <x-btn style="outline">Button</x-btn>
    <x-btn style="ghost">Button</x-btn>
</div>
```

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-btn style="success">Button</x-btn>
    <x-btn style="info">Button</x-btn>
    <x-btn style="warning">Button</x-btn>
    <x-btn style="danger">Button</x-btn>
</div>
```

## Link

Buttons can be used as an `<a>` element by supplying the `href=""` attribute.

```blade-component-code
<div class="flex justify-center">
    <x-btn href="#" style="outline">
        External Link
        <x-heroicon-o-arrow-top-right-on-square />
    </x-btn>
</div>
```

## Disabled State

Both linked buttons and traditional buttons can be set to a disabled state by supplying the `disabled` boolean attribute.

```blade-component-code
<div class="flex justify-center">
    <x-btn style="outline" disabled>Button</x-btn>
</div>
```

## Rounding

Customize the button rounding by supplying any of the `rounded-` classes.

```blade-component-code
<div class="flex justify-center">
    <x-btn style="outline" size="icon" class="rounded-full">
        <x-heroicon-o-arrow-up />
    </x-btn>
</div>
```

## Spinner

Customize the button rounding by supplying any of the `rounded-` classes.

```blade-component-code
<div class="flex justify-center gap-2">
    <x-btn style="outline" disabled>
        <x-spinner />
        Loading
    </x-btn>
    <x-btn style="outline" size="icon" disabled>
        <x-spinner />
    </x-btn>
</div>
```

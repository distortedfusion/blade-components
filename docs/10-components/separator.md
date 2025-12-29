---
title: Separator
description: Visually divide sections of content or groups of items.
short-description: Visually or semantically separates content.
icon: fasl-distribute-spacing-vertical
---

```blade-component-preview
<div class="w-full max-w-96">
    <x-heading size="sm">Blade Components</x-heading>
    <x-paragraph size="sm" style="muted">An open-source UI component library.</x-paragraph>
    <x-separator class="my-4" />
    <div class="flex items-center gap-4">
        <x-paragraph size="xs">Docs</x-paragraph>
        <x-separator vertical />
        <x-paragraph size="xs">Components</x-paragraph>
        <x-separator vertical />
        <x-paragraph size="xs">Themes</x-paragraph>
    </div>
</div>
```

## Usage

```html
<x-separator />
```

### Component API

| Attribute  | Default | Description                                            |
| ---------- | ------- | ------------------------------------------------------ |
| `vertical` | `false` | `bool`<br>Determines the orientation of the separator. |

## With Text

Add text to the separator for a more descriptive element.

```blade-component-code
<x-separator>
    or
</x-separator>
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

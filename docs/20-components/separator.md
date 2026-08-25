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

## Style

Control the separator style by setting the `style` attribute.

```blade-component-code
<div class="grid gap-8">
    <x-separator />

    <x-separator style="dashed" />
</div>
```

## With Content

Add text or icons to the separator for a more descriptive element.

```blade-component-code
<div class="grid gap-8">
    <x-separator>
        <x-paragraph size="xs" style="muted">Optional</x-paragraph>
    </x-separator>

    <x-separator>
        <x-heroicon-o-arrow-down-tray class="size-4 text-[var(--foreground)]" />
    </x-separator>
</div>
```

## Vertical

Separate content with a vertical separator when elements are horizontally stacked by adding the `vertical` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-4">
    <x-btn size="icon" style="ghost">
        <x-heroicon-o-arrow-down-tray />
    </x-btn>
    <x-separator vertical />
    <x-btn style="outline">
        Generate Export
    </x-btn>
</div>
```

## Component API

| Attribute  | Default | Description                                            |
| ---------- | ------- | ------------------------------------------------------ |
| `style`    | `solid` | `string`<br>Possible values `solid` or `dashed`.       |
| `vertical` | `false` | `bool`<br>Determines the orientation of the separator. |

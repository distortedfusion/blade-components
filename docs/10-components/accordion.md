---
title: Accordion
description: A vertically stacked set of interactive headings that each reveal a section of content.
---

```blade-component-preview
<div class="flex items-center min-h-60">
    <x-accordion exclusive>
        <x-accordion.item expanded>
            <x-accordion.title>What is Blade Components?</x-accordion.title>
            <x-accordion.content>
                <x-paragraph>Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.</x-paragraph>
            </x-accordion.content>
        </x-accordion.item>
        <x-accordion.item>
            <x-accordion.title>How much does it cost?</x-accordion.title>
            <x-accordion.content>
                <x-paragraph>Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.</x-paragraph>
            </x-accordion.content>
        </x-accordion.item>
        <x-accordion.item>
            <x-accordion.title>Getting started</x-accordion.title>
            <x-accordion.content>
                <x-paragraph>You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.</x-paragraph>
            </x-accordion.content>
        </x-accordion.item>
    </x-accordion>
</div>
```

## Usage

```html
<x-accordion exclusive>
    <x-accordion.item expanded>
        <x-accordion.title>What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title>How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title>Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

### Component API

#### x-accordion

| Attribute    | Default | Description                                                      |
| ------------ | ------- | ---------------------------------------------------------------- |
| `exclusive`  | `false` | `bool`<br>Enforce that only a single item is expanded at a time. |
| `transition` | `true`  | `bool`<br>Enable or disable transitions during item expansion.   |

#### x-accordion.item

| Attribute  | Default | Description                                               |
| ---------- | ------- | --------------------------------------------------------- |
| `expanded` | `false` | `bool`<br>Control the default state of an accordion item. |

## Exclusive

Enforce that only a single item is expanded at a time by supplying the `exclusive` attribute on the `x-accordion` component.

```blade-component-code
<x-accordion exclusive>
    <x-accordion.item>
        <x-accordion.title>What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title>How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title>Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Transition

Enable or disable transitions during item expansion by supplying the `transition="false"` attribute on the `x-accordion` component.

```blade-component-code
<x-accordion :transition="false">
    <x-accordion.item>
        <x-accordion.title>What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title>How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title>Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Expanded

Control the default state of an accordion item by supplying the `expanded` attribute on the `x-accordion.item` component.

```blade-component-code
<x-accordion>
    <x-accordion.item expanded>
        <x-accordion.title>What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item expanded>
        <x-accordion.title>How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item expanded>
        <x-accordion.title>Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph>You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.</x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

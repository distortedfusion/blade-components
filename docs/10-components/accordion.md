---
title: Accordion
description: A vertically stacked set of interactive headings that each reveal a section of content.
short-description: Reveal content sections under interactive headings.
icon: fasl-square-list
---

```blade-component-preview
<x-accordion exclusive>
    <x-accordion.item expanded>
        <x-accordion.title size="sm">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title size="sm">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title size="sm">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Usage

```html
<x-accordion exclusive>
    <x-accordion.item expanded>
        <x-accordion.title size="sm">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
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

#### x-accordion.title

| Attribute       | Default   | Description                                                                           |
| --------------- | --------- | ------------------------------------------------------------------------------------- |
| `size`          | `default` | `string`<br>Possible values `default`, `xs`, `sm` or `lg`                             |
| `indicatorIcon` | `null`    | `string` &#124;&#124; `null`<br>The component name for an alternative indicator icon. |


#### x-accordion.item

| Attribute  | Default | Description                                               |
| ---------- | ------- | --------------------------------------------------------- |
| `expanded` | `false` | `bool`<br>Control the default state of an accordion item. |

### Default Icons

Get or set the default icons used trough the `BladeComponents` service or via the component directly.

```php
<?php

use DistortedFusion\BladeComponents\BladeComponents;
use DistortedFusion\BladeComponents\Components\Accordion\Toggle;

BladeComponents::defaultAccordionIndicatorIcon();
BladeComponents::setDefaultAccordionIndicatorIcon(icon: 'heroicon-o-chevron-down');

Toggle::defaultIndicatorIcon();
Toggle::setDefaultIndicatorIcon(icon: 'heroicon-o-chevron-down');
```

## Exclusive

Enforce that only a single item is expanded at a time by supplying the `exclusive` attribute on the `x-accordion` component.

```blade-component-code
<x-accordion exclusive>
    <x-accordion.item>
        <x-accordion.title size="sm">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Transition

Enable or disable transitions during item expansion by supplying the `transition="false"` attribute on the `x-accordion` component.

```blade-component-code
<x-accordion :transition="false">
    <x-accordion.item>
        <x-accordion.title size="sm">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title size="sm">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.title size="sm">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Expanded

Control the default state of an accordion item by supplying the `expanded` attribute on the `x-accordion.item` component.

```blade-component-code
<x-accordion>
    <x-accordion.item expanded>
        <x-accordion.title size="sm">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item expanded>
        <x-accordion.title size="sm">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item expanded>
        <x-accordion.title size="sm">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Indicator Icon

Change the indicator icon by supplying the `indicatorIcon` attribute on the `x-accordion.title` component.

```blade-component-code
<x-accordion>
    <x-accordion.item>
        <x-accordion.title size="sm" indicator-icon="heroicon-o-arrow-up-circle">What is Blade Components?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm" indicator-icon="heroicon-o-arrow-up-circle">How much does it cost?</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                Blade Components is fully open-source and free to use — check out the <a href="https://github.com/distortedfusion/blade-components" target="_blank">source code</a> on GitHub.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.title size="sm" indicator-icon="heroicon-o-arrow-up-circle">Getting started</x-accordion.title>
        <x-accordion.content>
            <x-paragraph size="sm" style="muted">
                You can install Blade Components using Composer. Check out the <a href="/docs/installation">docs</a> to get started.
            </x-paragraph>
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

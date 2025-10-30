---
title: Input
description: Displays a form input field for capturing user data with various forms of text input.
short-description: Renders a text input field for capturing user data.
icon: fasl-input-text
---

```blade-component-preview
<div class="flex-grow lg:max-w-96">
    <x-form-input type="email" name="example-email" label="Email" description="This will be publicly displayed." placeholder="user@example.com" />
</div>
```

## Usage

```html
<x-form-input name="username" />
```

### Component API


| Attribute                           | Default | Description                                                                                                                                                                                                                                                                                     |
| ----------------------------------- | ------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                | `null`  | `string` &#124;&#124; `null`<br>When omitted the ID will be automatically determined based on the the `name`, `x-model` or `wire:model` attribute.                                                                                                                                              |
| `name`<br>`x-model`<br>`wire:model` | `null`  | `string` &#124;&#124; `null`<br>Name of the form control. One of [`name`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/input#name), [`x-model`](https://alpinejs.dev/directives/model) or [`wire:model`](https://livewire.laravel.com/docs/3.x/wire-model) is required. |
| `error-name`                        | `null`  | `string` &#124;&#124; `null`<br>Control the related [validation](/docs/forms/error-handling#customizing-the-error-name) message bag entry.                                                                                                                                                      |
| `label`                             | `null`  | `string` &#124;&#124; `null`<br>Optional [caption](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/label) for the form control.                                                                                                                                            |
| `type`                              | `text`  | `string`<br>The [input type](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/input#input_types) of the form control.                                                                                                                                                       |
| `default`                           | `null`  | `mixed`<br>The default value. This replaces the reserved `value` attribute when used as a [native form control](/docs/forms/error-handling#validation-and-old-input).                                                                                                                           |
| `show-errors`                       | `true`  | `bool`<br>Whether error messages should be shown.                                                                                                                                                                                                                                               |
| `mark-required`                     | `false` | `mixed`<br>Adds a visual indicator informing the user the form control is required.                                                                                                                                                                                                             |
| `column-span`                       | `1`     | `int`<br>Controls the [grid column span](https://developer.mozilla.org/en-US/docs/Web/CSS/column-span) of the form control.                                                                                                                                                                     |
| `column-start`                      | `1`     | `int`<br>Controls the [grid column start](https://developer.mozilla.org/en-US/docs/Web/CSS/grid-column-start) of the form control.                                                                                                                                                              |

### Types

Use any of the browser's [input types](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/input#input_types) for different situations.

```blade-component-code
<x-form-section>
    <x-form-input type="email" name="email" label="Email" />
    <x-form-input type="password" name="password" label="Password" />
    <x-form-input type="date" name="date" max="2999-12-31" label="Date" />
</x-form-section>
```

### Labels and Description

Captions and descriptions can be added to the form control by supplying the `label=""` and `description=""` attribute.

```blade-component-code
<x-form-input type="email" name="public-email" label="Email" description="This will be publicly displayed." />
```

For more advanced formatting of the description the `description` slot can be used.

```blade-component-code
<x-form-input type="email" name="email" label="Invite Team Member" placeholder="email@example.com">
    <x-slot:description>
        <div class="flex items-center justify-end gap-2">
            <x-paragraph size="xs" style="muted">
                8 existing team members
            </x-paragraph>
            <x-avatar.stack>
                <x-avatar size="xs" />
                <x-avatar size="xs" />
                <x-avatar size="xs" />
            </x-avatar.stack>
        </div>
    </x-slot:description>
</x-form-input>
```

### Icons

The `x-form-icon` component offers pre-styled icon support. Icons can be added to the form control by utilizing the `icon-prefix` or `icon-suffix` slots.

```blade-component-code
<x-form-section grid-columns="2">
    <x-form-input name="search" placeholder="Search for user...">
        <x-slot:icon-prefix>
            <x-form-icon icon="heroicon-o-magnifying-glass" />
        </x-slot:icon-prefix>
    </x-form-input>

    <x-form-input name="filter" placeholder="Filter...">
        <x-slot:icon-suffix>
            <x-form-icon icon="heroicon-o-funnel" />
        </x-slot:icon-suffix>
    </x-form-input>
</x-form-section>
```

### Prefix and Suffix

Form controls can be prefixed or suffixed with simple text elements for additional clarity.

```blade-component-code
<x-form-section>
    <x-form-input name="quantity" label="Quantity" type="number">
        <x-slot:prefix>
            Quantity
        </x-slot:prefix>
    </x-form-input>
    <x-form-input name="partial-email" label="Email">
        <x-slot:suffix>
            @example.com
        </x-slot:suffix>
    </x-form-input>
</x-form-section>
```

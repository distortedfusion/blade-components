---
title: Radio
description: Displays a control that allows the user to select one option from a set of mutually exclusive choices.
short-description: Renders a radio input field for selecting a single option.
icon: fasl-input-text
---

```blade-component-preview
<div class="flex-grow lg:max-w-96">
    <x-form-group label="Payment Method">
        <x-form-radio name="radio" value="option-a" label="Credit Card" default />
        <x-form-radio name="radio" value="option-b" label="iDeal" />
        <x-form-radio name="radio" value="option-c" label="PayPal" />
    </x-form-group>
</div>
```

---
title: Checkbox
description: Displays a control that allows the user to toggle between states.
short-description: Renders a checkbox input field for capturing state.
icon: fasl-square-check
---

```blade-component-preview
<div class="flex-grow lg:max-w-96">
    <x-form-group>
        <x-form-checkbox name="checkbox" label="Accept terms and conditions" default>
            <x-slot:description>
                <x-form-help>By clicking this checkbox, you agree to the terms and conditions.</x-form-help>
            </x-slot:description>
        </x-form-checkbox>


        <x-form-checkbox name="checkbox" label="Subscribe to newsletter" />
    </x-form-group>
</div>
```

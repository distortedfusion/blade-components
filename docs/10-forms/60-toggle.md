---
title: Toggle
description: Displays a control that allows the user to toggle between states using a switch.
short-description: Renders a checkbox input field as a switch.
icon: fasl-input-text
---

```blade-component-preview
<div class="flex-grow lg:max-w-96">
    <x-form-toggle name="toggle" label="Security emails">
        <x-slot:description>
            <x-form-help>Receive emails about your account activity and security.</x-form-help>
        </x-slot:description>
    </x-form-toggle>
</div>
```

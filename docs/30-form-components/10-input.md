---
title: Input
description: Displays a form input field for capturing user data with various forms of text input.
short-description: Renders a text input field for capturing user data.
icon: fasl-input-text
links:
    standalone-installation: /docs/forms
---

```blade-component-preview
<div class="flex-grow lg:max-w-96">
    <x-form-input name="email" label="Email">
        <x-slot:description>
            <x-form-help>This will be publicly displayed.</x-form-help>
        </x-slot:description>
    </x-form-input>
</div>
```

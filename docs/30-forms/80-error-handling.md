---
title: Error Handling
description: All Blade Forms components are designed to work as close to native HTML inputs as possible. This makes them directly interchangeable, including automatic error handling.
---

## Laravel Requests

For normal Laravel requests you define your form like any other HTML form:

```html
<x-form action="/" method="POST">
    <x-form-input name="description" label="Description" />
    <x-btn type="submit">Store</x-btn>
</x-form>
```

As you might have noticed, we didn't add a [CSRF token](https://laravel.com/docs/csrf) input. This is automatically handled by the `x-form` component. Additionally, for `PUT` and `PATCH` requests, the method will automatically be spoofed as described in the [Laravel Documentation](https://laravel.com/docs/routing#form-method-spoofing).

## Alpine.js and Livewire Requests

[Alpine.js](https://alpinejs.dev/directives/model) and [Livewire](https://livewire.laravel.com/docs/wire-model) require the usage of the `x-model` or `wire:model` attribute instead of the standard `name` attribute. Blade Forms automatically detects their usage and ensures error messages are correctly displayed.

```html
<div x-data="{ name: $wire.entangle('name') }">
    <x-form wire:submit.prevent="save">
        <!-- Entangled input using Alpine.js -->
        <x-form-input x-model="name" label="Name" />

        <!-- Wired input using Livewire directly -->
        <x-form-input wire:model="description" label="Description" />

        <x-btn type="submit">Store</x-btn>
    </x-form>
</div>
```

## Validation and Old Input

Blade Forms automatically handles [Laravel Error Messages](https://laravel.com/docs/validation) and displays any related error messages underneath the input.

When using normal Laravel Request you will most likely want to keep the [old input](https://laravel.com/docs/requests#old-input) data when a validation error occurs. Instead of using something like `value="old('name')"` Blade Forms will automatically repopulate any previously entered data for you.

### Default States

Since the `value` attribute is managed by Blade Forms to repopulate old data, any default states of an input need to be set using the `default` attribute.

```blade-component-code
<x-form-input name="filter" label="Filter" default="Lorem Ipsum..." />
```

### Customizing the Error Name

By default any validation error messages are resolved using the `name`, `x-model` or `wire:model` attribute.

In some cases, especially with Alpine.js where you might have used a masked input, your validation error message key might not directly relate to any of these attributes.

To resolve this, customize the validation error message key by setting the `error-name` attribute:

```html
<x-form-input type="number" name="amount-mask" label="Amount" error-name="amount" />
```

### Hide Error Messages

By default all components except radios show any validation error messages. To disable this behavior, set `show-errors` to `false`.

```html
<x-form-input name="description" label="Description" :show-errors="false" />
```

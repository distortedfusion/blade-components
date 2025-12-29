---
title: Card
description: Display related information in a single unit, optionally providing related actions.
short-description: Group related information in a single container.
icon: fasl-window-maximize
---

```blade-component-preview
<x-card class="w-full max-w-96">
    <x-card.header>
        <x-card.title>Login to your account</x-card.title>
        <x-paragraph>Enter your email below to login to your account</x-paragraph>
    </x-card.header>
    <x-card.body>
        <div class="grid gap-6">
            <x-form-input type="email" name="username" label="Email" placeholder="user@example.com" />
            <x-form-input type="password" name="Password" label="Password" />
        </div>
    </x-card.body>
    <x-card.footer class="flex items-center gap-2">
        <x-btn size="sm" class="flex-1" style="outline">Cancel</x-btn>
        <x-btn size="sm" class="flex-1">Submit</x-btn>
    </x-card.footer>
</x-card>
```

## Usage

```html
<x-card>
    <x-card.header>
        <x-card.title>Header</x-card.title>
    </x-card.header>
    <x-card.body>Body</x-card.body>
    <x-card.footer>Footer</x-card.footer>
</x-card>
```

### Component API

| Attribute | Default   | Description                                                                      |
| --------- | --------- | -------------------------------------------------------------------------------- |
| `style`   | `default` | `string`<br>Possible values `default`, `ghost`, `success`, `info`, `warning` or `danger`. |

## Style

Control the card style by supplying the `style=""` attribute.

```blade-component-code
<div class="flex flex-col gap-y-4">
    <x-card>
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm">Update</x-btn>
        </x-card.footer>
    </x-card>

    <x-card style="ghost">
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm" style="secondary">Update</x-btn>
        </x-card.footer>
    </x-card>

    <x-card style="success">
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm" style="success">Update</x-btn>
        </x-card.footer>
    </x-card>

    <x-card style="info">
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm" style="info">Update</x-btn>
        </x-card.footer>
    </x-card>

    <x-card style="warning">
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm" style="warning">Update</x-btn>
        </x-card.footer>
    </x-card>

    <x-card style="danger">
        <x-card.header>
            <x-card.title :as-heading="false">The Evil Rabbit Jumped over the Fence</x-card.title>
        </x-card.header>

        <x-card.footer class="justify-end">
            <x-btn size="sm" style="ghost">Cancel</x-btn>
            <x-btn size="sm" style="danger">Delete</x-btn>
        </x-card.footer>
    </x-card>
</div>
```

## Card Title

For consistency the `x-card.title` component can be used within the `x-card.header` component. The `x-card.title` [extends the `x-heading` component](/docs/components/typography#heading) and sets the `heading-level` to `3` by default. Alternatively it's also possible to simply provide the native HTML headings directly.

```html
<x-card.title>Title</x-card.title>

<x-heading :heading-level="3">Title</x-heading>

<h3>Title</h3>
```

## Actions

The `x-card.heading` component has a dedicated `x-slot:actions` slot intended for simple call to actions elements.

```blade-component-code
<x-card>
    <x-card.header>
        <x-card.title :as-heading="false">Company Details</x-card.title>

        <x-slot:action>
            <x-btn size="sm" style="outline">Update Details</x-btn>
        </x-slot:action>
    </x-card.header>

    <x-list-group>
        <x-list-group.item>
            <x-slot:title>
                Name
            </x-slot:title>
            Distorted Fusion
        </x-list-group.item>
        <x-list-group.item href="https://distortedfusion.com" target="_blank">
            <x-slot:title>
                Website
            </x-slot:title>
            distortedfusion.com
        </x-list-group.item>
    </x-list-group>
</x-card>
```

## List Groups

Cards will automatically modify the `x-list-group` component styling to match the card. You can use `x-list-group` components within either, the `x-card.body` or `x-card.footer` components, or directly within the `x-card` component.

```blade-component-code
<x-card>
    <x-card.header>
        <x-card.title>Webhook Details</x-card.title>
        <x-paragraph size="sm">Details the webhook activity.</x-paragraph>
    </x-card.header>

    <x-card.body>
        <x-list-group>
            <x-list-group.item>
                <x-slot:title>
                    Status
                </x-slot:title>
                <x-badge style="success">Active</x-badge>
            </x-list-group.item>
            <x-list-group.item>
                <x-slot:title>
                    Last Activity
                </x-slot:title>
                2 months ago
            </x-list-group.item>
        </x-list-group>
    </x-card.body>
</x-card>
```

```blade-component-code
<x-card>
    <x-card.header>
        <x-card.title>Webhook Details</x-card.title>
        <x-paragraph size="sm">Details the webhook activity.</x-paragraph>
    </x-card.header>

    <x-list-group>
        <x-list-group.item>
            <x-slot:title>
                Status
            </x-slot:title>
            <x-badge style="success">Active</x-badge>
        </x-list-group.item>
        <x-list-group.item>
            <x-slot:title>
                Last Activity
            </x-slot:title>
            2 months ago
        </x-list-group.item>
    </x-list-group>
</x-card>
```

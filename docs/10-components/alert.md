---
title: Alert
description: Display text that requires attention or provides additional information.
short-description: Display text that requires attention or provides additional information.
icon: fasl-bell
---

```blade-component-preview
<x-alert class="flex-grow">This alert details some information.</x-alert>
```

## Usage

```html
<x-alert>This alert details some information.</x-alert>
```

### Component API

| Attribute | Default   | Description                                                                      |
| --------- | --------- | -------------------------------------------------------------------------------- |
| `title`   | `null`    | `string` &#124;&#124; `null`<br>Optional title for added clarity.                |
| `style`   | `default` | `string`<br>Possible values `default`, `success`, `info`, `warning` or `danger`. |
| `icon`    | `null`    | `string`<br>Optional component alias of the icon.                                |

## Title

For added clarity a title can be added to the alert by supplying the `title=""` attribute.

```blade-component-code
<x-alert title="Important">
    This alert details some information.
</x-alert>
```

## Style

Control the alert style by supplying the `style=""` attribute.

```blade-component-code
<div class="space-y-2">
    <x-alert style="default">
        This alert details some information.
    </x-alert>
    <x-alert style="success">
        This alert details a success.
    </x-alert>
    <x-alert style="info">
        This alert details some information.
    </x-alert>
    <x-alert style="warning">
        This alert details a warning.
    </x-alert>
    <x-alert style="danger">
        This alert details an error.
    </x-alert>
</div>
```

## Icon

You can control the icon per alert instance by supplying the `icon=""` attribute. Any [blade-ui-kit/blade-icons](https://github.com/blade-ui-kit/blade-icons) compatible icon set can be used.

```blade-component-code
<x-alert style="warning" icon="heroicon-o-bolt">
    This alert details some information.
</x-alert>
```

### Customizing the default icons

The alert component uses the [blade-ui-kit/blade-heroicons](https://github.com/blade-ui-kit/blade-heroicons) icon set by default.

| Style     | Default Icon                    |
| --------- | ------------------------------- |
| `default` | `heroicon-o-information-circle` |
| `success` | `heroicon-o-check-circle`       |
| `info`    | `heroicon-o-information-circle` |
| `warning` | `heroicon-o-exclamation-circle` |
| `danger`  | `heroicon-o-x-circle`           |

You can customize the default icons globally by calling either the `setDefaultIcons()` or `setDefaultIconForStyle()` method from a service provider's `boot()` method, or middleware.

The `setDefaultIcons()` method takes an array of icon definitions.

```php
<?php

use DistortedFusion\BladeComponents\Components\Alert\Index as Alert;

Alert::setDefaultIcons([
    'default' => 'heroicon-o-information-circle',
    'success' => 'heroicon-o-check-circle',
    'info'    => 'heroicon-o-information-circle',
    'warning' => 'heroicon-o-exclamation-circle',
    'danger'  => 'heroicon-o-x-circle',
]);
```

The `setDefaultIconForStyle()` method sets the icon for a specific style.

```php
<?php

use DistortedFusion\BladeComponents\Components\Alert\Index as Alert;

Alert::setDefaultIconForStyle(
    style: 'default',
    icon: 'heroicon-o-information-circle'
);
```

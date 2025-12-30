---
title: Configuration
description: Exclude components trough configuration, prevent collisions, and customize components by publishing their views.
---

## Publishing configuration

All components, and their aliases, offered by Blade Components are configured in the [`blade-components.php`](https://github.com/distortedfusion/blade-components/blob/master/config/blade-components.php) configuration file. You can exclude certain components by removing them from the `components` entry after publishing the configuration file.

> [!NOTE]
> It's possible to change the alias used by a component from the same configuration file. However, this isn't recommended as new components added in future releases might overlap.

You can publish the package configuration using the following command:

```bash
php artisan vendor:publish --tag=blade-components-config
```

Publishing the package configuration allows you to disable or add components.

### Preventing collisions

To prevent collisions with your own components, it's possible to prefix all components offered by Blade Components with a prefix.

After publishing the configuration file set the `prefix` entry to the prefix you would like to use.

```php
<?php

return [

    'prefix' => null,

];
```

```html
<!-- Without prefix, default behavior -->
<x-btn>Button</x-btn>

<!-- With a prefix set to `df` -->
<x-df-btn>Button</x-df-btn>
```

## Publishing views

If you would like to make more impactful modifications to a component, the recommended approach is to publish the components view file to your application.

You can publish the packaged views using the following command:

```bash
php artisan vendor:publish --tag=blade-components-views
```

After publishing you can modify the views from your application's `/resources/views/vendor/blade-components` directory.

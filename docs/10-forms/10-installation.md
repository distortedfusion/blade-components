---
title: Installation
description: Blade Forms is a collection of reusable Blade form components implementing Tailwind CSS. With support for Alpine.js, Livewire and native Laravel Requests.
links:
    tailwindcss/forms: https://github.com/tailwindlabs/tailwindcss-forms
---

## Install Blade Forms

Blade Forms can be installed via composer by running the following command from your project root:

```bash
composer require distortedfusion/blade-forms
```

## Setting up Tailwind CSS

Blade Forms requires the [@tailwindcss/forms](https://github.com/tailwindlabs/tailwindcss-forms) plugin. Run the following command to [install the plugin](https://tailwindcss.com/docs/installation):

```bash
npm install tailwindcss @tailwindcss/forms --save-dev
```

Once installed you can import the `tailwind.config.preset` into your existing `tailwind.config.js` file, this will configure the Tailwind CSS Forms plugin. Lastly include the Blade Forms resources in your existing `tailwind.config.js` content section:

```js
import bladeForms from './vendor/distortedfusion/blade-forms/tailwind.config.preset'

export default {
    darkMode: 'class',

    presets: [bladeForms],

    content: [
        ...
        './vendor/distortedfusion/blade-forms/resources/**/*.blade.php',
    ],

    ...
}
```

Please refer to the [Tailwind CSS documentation](https://tailwindcss.com/docs/installation) if you don't have Tailwind CSS installed already.

## Publishing Configuration

You can publish the package configuration using the following command:

```bash
php artisan vendor:publish --tag=blade-forms-config
```

Publishing the package configuration allows you to disable or add components.

## Publishing Views

You can publish the package views using the following command:

```bash
php artisan vendor:publish --tag=blade-forms-views
```

After publishing you can modify the views from your application's `/resources/views/vendor/blade-forms` directory.

## Using Blade Forms Standalone

Blade Forms can be used standalone. The installation of Blade Components isn't required if you so desire.

Please note that you're still required to set up [Blade Colors](/docs/installation#setting-up-blade-colors) for complete theme support.

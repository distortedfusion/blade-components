---
title: Installation
description: Blade Components is a hand-crafted, UI component library for building consistent web experiences in Laravel apps.
---

## Prerequisites

Blade Components requires the following before installing:

```blade-component
    <div class="grid md:grid-cols-2 gap-4">
        <x-docs.card-btn href="https://laravel.com/" target="_blank">
            <div class="space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 50 52"><path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="#FF2D20"></path></svg>
                <x-heading :heading-level="4">Laravel</x-heading>
            </div>

            <x-paragraph size="sm" style="muted">Version ^9.0 or later</x-paragraph>
        </x-docs.card-btn>
        <x-docs.card-btn href="https://tailwindcss.com/" target="_blank">
            <div class="space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 54 33"><g clip-path="url(#prefix__clip0)"><path fill="#38bdf8" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"></path></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"></path></clipPath></defs></svg>
                <x-heading :heading-level="4">TailwindCSS</x-heading>
            </div>

            <x-paragraph size="sm" style="muted">Version ^4.0 or later</x-paragraph>
        </x-docs.card-btn>
    </div>
```

## Install Blade Components

Blade Components can be installed via composer by running the following command from your project root:

```bash
composer require ddfsn/blade-components
```

## Setting up Tailwind CSS

Blade Components uses Tailwind CSS for its default styling. If you already have Tailwind installed in your project, just add the following configuration to your `tailwind.config.js` config file:

```js
export default {
    darkMode: 'class',

    content: [
        ...,
        './vendor/ddfsn/blade-components/resources/**/*.blade.php',
    ],

    ...
}
```

Please refer to the [Tailwind documentation](https://tailwindcss.com/docs/installation) if you don't have Tailwind CSS installed already.

## Setting up Blade Colors

Themes are managed trough the complimentary [Blade Colors](https://distortedfusion.com/docs/distortedfusion/blade-colors/getting-started) package. Blade Colors offers [Tailwind CSS](https://tailwindcss.com/) compatible, CSS variable based, style definitions. You will find the full documentation on the dedicated [documentation](https://distortedfusion.com/docs/distortedfusion/blade-colors/getting-started) page.

Blade Colors is automatically installed with Blade Components. After installation the `@ddfsnStyles` directive needs be added to your layouts `<head>` section:

```html
<head>
    ...
    @ddfsnStyles
</head>
```

#### Theme customization

Blade Components implements the ["default theme"](https://github.com/distortedfusion/blade-colors/blob/master/src/Themes/DefaultTheme.php) offered by [Blade Colors](https://distortedfusion.com/docs/distortedfusion/blade-colors/getting-started). You can customize this to your liking, for a detailed explanation please refer to the [theming](/docs/theming) documentation.

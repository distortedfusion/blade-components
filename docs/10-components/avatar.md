---
title: Avatar
description: Image element, with a fallback, for graphically representing the user.
short-description: Show a user’s image with a fallback option.
icon: fasl-aperture
---

```blade-component-preview
<div class="mx-auto">
    <x-avatar.stack>
        <x-avatar />
        <x-avatar />
        <x-avatar />
    </x-avatar.stack>
</div>
```

## Usage

```html
<x-avatar />
```

## Image

Show an image by setting the `src` attribute. Optionally add support for [responsive images](https://developer.mozilla.org/en-US/docs/Web/HTML/Responsive_images) by setting the `srcset` attribute.

When showing an image, set the `alt` attribute to provide alternate text in case the image cannot be displayed.

```blade-component-code
<div class="flex justify-center">
    <x-avatar src="/assets/avatar.jpeg"
        srcset="/assets/avatar@2x.jpeg 2x"
        alt="Kevin Dierkx" />
</div>
```

## Size

Control the avatar size by setting the `size` attribute.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-avatar size="xs" />
    <x-avatar size="sm" />
    <x-avatar />
    <x-avatar size="lg" />
</div>
```

## Icon

Control the icon per avatar instance by setting the `icon` attribute. Any [blade-ui-kit/blade-icons](https://github.com/blade-ui-kit/blade-icons) compatible icon set can be used.

```blade-component-code
<div class="flex justify-center">
    <x-avatar icon="heroicon-o-academic-cap" />
</div>
```

## Stack

Stack multiple avatars by wrapping them in a `<x-avatar.stack>` component.

```blade-component-code
<div class="flex items-start justify-center gap-8 max-md:flex-col">
    <x-avatar.stack>
        <x-avatar size="xs" />
        <x-avatar size="xs" />
        <x-avatar size="xs" />
    </x-avatar.stack>

    <x-avatar.stack>
        <x-avatar size="sm" />
        <x-avatar size="sm" />
        <x-avatar size="sm" />
    </x-avatar.stack>

    <x-avatar.stack>
        <x-avatar />
        <x-avatar />
        <x-avatar />
    </x-avatar.stack>

    <x-avatar.stack>
        <x-avatar size="lg" />
        <x-avatar size="lg" />
        <x-avatar size="lg" />
    </x-avatar.stack>
</div>
```

## Default Icons

The avatar component uses the [blade-ui-kit/blade-heroicons](https://github.com/blade-ui-kit/blade-heroicons) icon set by default.

You can customize the default icons globally through the `BladeComponents` service or via the component directly from a service provider's `boot()` method, or middleware.

```php
<?php

use DistortedFusion\BladeComponents\BladeComponents;
use DistortedFusion\BladeComponents\Components\Avatar\Index as Avatar;

BladeComponents::defaultAvatarIcon();
BladeComponents::setDefaultAvatarIcon(icon: 'heroicon-o-user');

Avatar::defaultIcon();
Avatar::setDefaultIcon(icon: 'heroicon-o-user');
```

## Component API

### x-avatar

| Attribute | Default           | Description                                                                                                                                              |
| --------- | ----------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `src`     | `null`            | `string` &#124;&#124; `null`<br>The image source.                                                                                                        |
| `srcset`  | `null`            | `string` &#124;&#124; `null`<br>The image source set, used for [responsive images](https://developer.mozilla.org/en-US/docs/Web/HTML/Responsive_images). |
| `alt`     | `null`            | `string` &#124;&#124; `null`<br>The image alternate text.                                                                                                |
| `size`    | `default`         | `string`<br>Possible values `default`, `xs`, `sm` or `lg`.                                                                                               |
| `icon`    | `heroicon-o-user` | `string` &#124;&#124; `null`                                                                                                                             |

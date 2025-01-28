---
title: Avatar
description: Image element, with a fallback, for graphically representing the user.
---

```blade-component-preview
<div class="flex justify-center items-center h-32">
    <x-avatar />
</div>
```

## Usage

```html
<x-avatar />
```

### Component API

| Attribute | Default           | Description                                                                                                                                              |
| --------- | ----------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `src`     | `null`            | `string` &#124;&#124; `null`<br>The image source.                                                                                                        |
| `srcset`  | `null`            | `string` &#124;&#124; `null`<br>The image source set, used for [responsive images](https://developer.mozilla.org/en-US/docs/Web/HTML/Responsive_images). |
| `alt`     | `null`            | `string` &#124;&#124; `null`<br>The image alternate text.                                                                                                |
| `size`    | `null`            | `string` &#124;&#124; `null`<br>Possible values `null`, `xs`, `sm` or `lg`.                                                                              |
| `icon`    | `heroicon-o-user` | `string` &#124;&#124; `null`                                                                                                                             |


## Image

Show an image by supplying the `src=""` attribute. Optionally add support for [responsive images](https://developer.mozilla.org/en-US/docs/Web/HTML/Responsive_images) by supplying the `srcset=""` attribute.

When showing an image it's good practice to supply the `alt=""` attribute to specify an alternate text, if the image cannot be displayed.

```blade-component-code
<div class="flex justify-center">
    <x-avatar src="/docs/avatar.jpeg"
        srcset="/docs/avatar@2x.jpeg 2x"
        alt="Kevin Dierkx" />
</div>
```

## Size

Control the avatar size by supplying the `size=""` attribute.

```blade-component-code
<div class="flex items-center justify-between">
    <x-avatar size="lg" />
    <x-avatar />
    <x-avatar size="sm" />
    <x-avatar size="xs" />
</div>
```

## Icon

You can control the icon per avatar instance by supplying the `icon=""` attribute. Any [blade-ui-kit/blade-icons](https://github.com/blade-ui-kit/blade-icons) compatible icon set can be used.

```blade-component-code
<div class="flex justify-center">
    <x-avatar icon="heroicon-o-academic-cap" />
</div>
```

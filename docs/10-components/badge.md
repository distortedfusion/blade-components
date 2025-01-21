---
title: Badge
description: A contained label that shows the status of an element, emphasizes an element, or helps categorize an element with other similar elements.
---

```blade-component-code
<x-badge>Badge Text</x-badge>
```

## Variants

```blade-component-code
<div class="flex items-center space-x-4">
    <x-badge style="success">Badge Text</x-badge>
    <x-badge style="info">Badge Text</x-badge>
    <x-badge style="warning">Badge Text</x-badge>
    <x-badge style="danger">Badge Text</x-badge>
    <x-badge style="default">Badge Text</x-badge>
</div>
```

## Sizes

```blade-component-code
<div class="flex items-center space-x-4">
    <x-badge size="lg">Badge Text</x-badge>
    <x-badge>Badge Text</x-badge>
    <x-badge size="sm">Badge Text</x-badge>
</div>
```

## With Icons

```blade-component-code
<div class="flex items-center space-x-4">
    <x-badge icon="fal-circle-check" style="success">Badge Text</x-badge>
    <x-badge icon="fal-circle-xmark" style="danger">Badge Text</x-badge>
    <x-badge icon="fal-circle-info" style="default">Badge Text</x-badge>
</div>
```

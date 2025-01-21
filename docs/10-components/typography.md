---
title: Typography
description:
---

Display text using pre-defined typographic styles and style combinations.

## Heading

```blade-component-code
<x-heading :heading-level="1" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="2" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="3" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="4" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="5" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="6" size="flex" :as-heading="false">The Evil Rabbit Jumps.</x-heading>
```

## Paragraph

```blade-component-code
<x-paragraph>
    The Evil Rabbit Jumped over the Fence.
</x-paragraph>
```

## Description

Displays a brief heading and subheading for additional information or context.

```blade-component-code
<x-description>
    <x-slot:title>
        Section Title
    </x-slot:title>
    Description about this section.
</x-description>
```

## Currency

```blade-component-code
<x-currency :value="100.00" />
```

## Date Time

```blade-component-code
<x-date-time :date="\Carbon\Carbon::now()" />
```

## Unordered List

```blade-component-code
<x-ul>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
</x-ul>
```

## Ordered List

```blade-component-code
<x-ol>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
</x-ol>
```

## Codeblock

```blade-component-code
<x-pre>composer require distortedfusion/blade-component-codes</x-pre>
```

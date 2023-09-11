# Text

## Heading

```blade-component
<x-heading :heading-level="1">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="2">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="3">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="4">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="5">The Evil Rabbit Jumps.</x-heading>
<x-heading :heading-level="6">The Evil Rabbit Jumps.</x-heading>
```

## Paragraph

```blade-component
<x-paragraph>
    The Evil Rabbit Jumped over the Fence.
</x-paragraph>
```

## Description

Displays a brief heading and subheading for additional information or context.

```blade-component
<x-description>
    <x-slot:title>
        Section Title
    </x-slot:title>
    Description about this section.
</x-description>
```

## Unordered List

```blade-component
<x-ul>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
</x-ul>
```

## Ordered List

```blade-component
<x-ol>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
    <li>The Evil Rabbit Jumped over the Fence.</li>
</x-ol>
```

## Codeblock

```blade-component
<x-pre>composer require distortedfusion/blade-components</x-pre>
```

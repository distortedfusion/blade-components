# Badges

A contained label that shows the status of an element, emphasizes an element, or helps categorize an element with other similar elements.

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

## With Icons

```blade-component-code
<div class="flex items-center space-x-4">
    <x-badge>
        <x-slot:prefix>
            <x-badge-icon icon="fal-arrow-up" />
        </x-slot:prefix>
        Badge Text
    </x-badge>
</div>
```

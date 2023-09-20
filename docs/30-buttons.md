# Buttons

A controls that triggers an action. Button labels should express what action will occur when the user interacts with it.

```blade-component
<div class="grid grid-cols-3 gap-4">
    <x-btn style="default">Button Text</x-btn>
    <x-btn style="primary">Button Text</x-btn>
    <x-btn style="success">Button Text</x-btn>
    <x-btn style="info">Button Text</x-btn>
    <x-btn style="warning">Button Text</x-btn>
    <x-btn style="danger">Button Text</x-btn>
</div>
```

## Links

Buttons can be used as links by supplying a `href=""` attribute.

```blade-component
<div class="grid grid-cols-3 gap-4">
    <x-btn href="#">Button Text</x-btn>
</div>
```

## Disabled State

Both linked buttons and traditional buttons can be set to a disabled state by supplying the `disabled` boolean attribute.

```blade-component
<div class="grid grid-cols-3 gap-4">
    <x-btn disabled href="#">Button Text</x-btn>
    <x-btn disabled>Button Text</x-btn>
</div>
```

## Sizes

```blade-component
<div class="grid grid-cols-3 gap-4 items-center">
    <x-btn size="lg">Button Text</x-btn>
    <x-btn>Button Text</x-btn>
    <x-btn size="sm">Button Text</x-btn>
</div>
```

## Prefix and Suffix

```blade-component
<div class="grid grid-cols-3 gap-4 items-center">
    <x-btn>
        <x-slot:prefix>
            <x-btn.icon icon="fad-arrow-up" />
        </x-slot:prefix>
        Button Text
    </x-btn>
    <x-btn>
        Button Text
        <x-slot:suffix>
            <x-btn.icon icon="fad-arrow-up" />
        </x-slot:suffix>
    </x-btn>
    <x-btn>
        <x-slot:prefix>
            <x-btn.icon icon="fad-arrow-up" />
        </x-slot:prefix>
        Button Text
        <x-slot:suffix>
            <x-btn.icon icon="fad-arrow-up" />
        </x-slot:suffix>
    </x-btn>
</div>
```

## Groups

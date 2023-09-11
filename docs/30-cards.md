# Cards

```blade-component
<x-card>
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-card.body>
        <p>The Evil Rabbit Jumped over the Fence</p>
    </x-card.body>

    <x-card.footer>
        The Evil Rabbit Jumped over the Fence
    </x-card.footer>
</x-card>
```

## Card Actions

```blade-component
<x-card>
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>

        <x-slot:action>
            <x-btn size="sm">Update Details</x-btn>
        </x-slot:action>
    </x-card.header>

    <x-card.body>
        <p>The Evil Rabbit Jumped over the Fence</p>
    </x-card.body>
</x-card>
```

```blade-component
<x-card>
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-card.body>
        <p>The Evil Rabbit Jumped over the Fence</p>
    </x-card.body>

    <x-card.footer class="justify-end">
        <x-btn size="sm" style="default">Cancel</x-btn>
        <x-btn size="sm">Update</x-btn>
    </x-card.footer>
</x-card>
```

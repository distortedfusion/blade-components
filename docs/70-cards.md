# Cards

Display related information in a single unit, optionally providing related actions.

```blade-component-code
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

## Actions

```blade-component-code
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

```blade-component-code
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

## Variants

```blade-component-code
<x-card style="warning">
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-card.body>
        <p>The Evil Rabbit Jumped over the Fence</p>
    </x-card.body>

    <x-card.footer class="justify-end">
        <x-btn size="sm" style="default">Cancel</x-btn>
        <x-btn size="sm" style="warning">Update</x-btn>
    </x-card.footer>
</x-card>
```

```blade-component-code
<x-card style="danger">
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-card.body>
        <p>The Evil Rabbit Jumped over the Fence</p>
    </x-card.body>

    <x-card.footer class="justify-end">
        <x-btn size="sm" style="default">Cancel</x-btn>
        <x-btn size="sm" style="danger">Delete</x-btn>
    </x-card.footer>
</x-card>
```

## List Groups

```blade-component-code
<x-card>
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-card.body class="space-y-6">
        <p>The Evil Rabbit Jumped over the Fence</p>

        <x-list-group>
            <x-list-group.item>
                <x-slot:title>
                    Last Activity
                </x-slot:title>
                2 months ago
            </x-list-group.item>
            <x-list-group.item>
                <x-slot:title>
                    Availability
                </x-slot:title>
                Available
            </x-list-group.item>
        </x-list-group>
    </x-card.body>
</x-card>
```

```blade-component-code
<x-card>
    <x-card.header>
        <x-card.title>The Evil Rabbit Jumped over the Fence</x-card.title>
    </x-card.header>

    <x-list-group flush>
        <x-list-group.item-link href="#">
            <x-slot:title>
                Last Activity
            </x-slot:title>
            2 months ago
        </x-list-group.item-link>
        <x-list-group.item>
            <x-slot:title>
                Availability
            </x-slot:title>
            Available
        </x-list-group.item>
    </x-list-group>
</x-card>
```

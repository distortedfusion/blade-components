# Empty States

```blade-component-code
<x-layout.empty-state title="Title">
    The Evil Rabbit Jumped over the Fence.
    <x-slot:action>
        <x-btn size="sm">Primary Action</x-btn>
        <x-btn size="sm" style="tertiary">
            Learn More
            <x-slot:suffix>
                <x-btn.icon icon="fal-arrow-up-right-from-square" />
            </x-slot:suffix>
        </x-btn>
    </x-slot:action>
</x-layout.empty-state>
```

## Informational

```blade-component-code
<x-layout.empty-state title="Title">
    <x-paragraph>The Evil Rabbit Jumped over the Fence.</x-paragraph>

    <x-list-group>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-brush" style="tertiary" />
                </div>

                <div class="flex-grow">
                    <span class="font-medium">TailwindCSS</span>
                    <div class="text-xs text-gray-600">CSS Framework</div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-code" style="tertiary" />
                </div>

                <div class="flex-grow">
                    <span class="font-medium">Laravel</span>
                    <div class="text-xs text-gray-600">Application Framework</div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-database" style="tertiary" />
                </div>

                <div class="flex-grow">
                    <span class="font-medium">MySQL</span>
                    <div class="text-xs text-gray-600">Database</div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
    </x-list-group>
    <x-slot:action>
        <x-btn size="sm" style="tertiary">
            Learn More
            <x-slot:suffix>
                <x-btn.icon icon="fal-arrow-up-right-from-square" />
            </x-slot:suffix>
        </x-btn>
    </x-slot:action>
</x-layout.empty-state>
```

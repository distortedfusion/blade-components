<header {{ $attributes->class([
        'text-black dark:text-white',
    ]) }}>
    <x-dynamic-component :component="$currentRouteApplicableForNarrowLayout() ? 'container-narrow' : 'container'">
        <div class="border-b border-black/10 py-6">
            <div class="flex items-center">
                @if($url = $getPreviousUrl())
                    <div class="flex-shrink-0 border-r border-black/10 pr-2 mr-2">
                        <x-btn :href="$url" size="sm" style="tertiary" class="px-2">
                            <x-btn.icon icon="fal-chevron-left" />
                        </x-btn>
                    </div>
                @endif

                @if($icon)
                    <div class="flex-shrink-0 mr-4">
                        <x-layout.icon :icon="$icon" />
                    </div>
                @endif

                <div class="flex-grow flex items-center space-x-4">
                    <x-dynamic-component :component="$asHeading ? 'heading' : 'paragraph'"
                        class="font-sans-heading font-bold text-lg">
                        {{ $title }}
                    </x-dynamic-component>
                </div>
                @if($actions ?? false)
                    <div class="flex items-center space-x-2 ml-2">
                        {!! $actions !!}
                    </div>
                @endif
            </div>
        </div>
    </x-dynamic-component>
</header>

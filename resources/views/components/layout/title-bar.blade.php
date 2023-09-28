<header {{ $attributes }}>
    <x-dynamic-component :component="$currentRouteApplicableForNarrowLayout() ? 'container-narrow' : 'container'">
        <div class="border-b border-black/10 py-6">
            <div class="flex items-center space-x-4">
                @if($url = $getPreviousUrl())
                    <div class="flex-shrink-0">
                        <a href="{{ $url }}" class="group btn btn-primary btn-secondary btn-sm text-base px-2">
                            <x-fal-chevron-left class="text-muted group-hover:text-brand-600 w-4 h-4" />
                        </a>
                    </div>
                @endif

                @if($icon)
                    <div class="flex-shrink-0">
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
                    <div class="flex items-center space-x-2">
                        {!! $actions !!}
                    </div>
                @endif
            </div>
        </div>
    </x-dynamic-component>
</header>

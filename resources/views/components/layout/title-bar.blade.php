<x-container :size="$currentRouteApplicableForNarrowLayout() ? 'md' : null">
    <header {{ $attributes->class([
            'py-6',
            'text-black dark:text-white',
            'border-b border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border'),
        ]) }}>
        <div class="space-y-6">
            <div class="space-y-4">
                @if($breadcrumbs ?? false)
                    {{ $breadcrumbs }}
                @endif
                <div class="flex items-center">
                    @if($url = $getPreviousUrl())
                        <div class="flex-shrink-0 border-r border-black/10 dark:border-white/10 pr-2 mr-4">
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
                        <x-heading size="flex" :as-heading="$asHeading"
                            class="text-black dark:text-white font-sans-heading hyphens-auto text-2xl py-1">
                            {{ $title }}
                        </x-heading>
                    </div>
                    @if($actions ?? false)
                        <div class="flex items-center space-x-2 ml-2">
                            {!! $actions !!}
                        </div>
                    @endif
                </div>
            </div>

            {{ $slot }}
        </div>
    </header>
</x-container>

<x-container :size="$currentRouteApplicableForNarrowLayout() ? 'md' : null">
    <header {{ $attributes->class([
            'py-6 text-[var(--foreground)] border-b border-[var(--border)]'
        ]) }}>
        <div class="flex flex-col gap-y-6">
            <div class="flex flex-col gap-y-4">
                @if($breadcrumbs ?? false)
                    {{ $breadcrumbs }}
                @endif
                <div class="flex items-center">
                    @if($url = $getPreviousUrl())
                        <div class="flex-shrink-0 border-r border-[var(--border)] pr-2 mr-4">
                            <x-btn :href="$url" size="sm" style="ghost" class="px-2">
                                <x-dynamic-component :component="$previousIcon" class="size-4 text-[var(--foreground)] opacity-50 group-hover:opacity-100 group-focus/indicator:opacity-100 relative z-10" />
                            </x-btn>
                        </div>
                    @endif
                    @if($icon)
                        <div class="flex-shrink-0 mr-4">
                            <x-layout.icon :icon="$icon" />
                        </div>
                    @endif
                    <div class="flex-grow flex items-center gap-x-4">
                        <x-heading size="flex" :as-heading="$asHeading" class="hyphens-auto text-2xl py-1">
                            {{ $title }}
                        </x-heading>
                    </div>
                    @if($actions ?? false)
                        <div class="flex items-center gap-x-2 ml-2">
                            {!! $actions !!}
                        </div>
                    @endif
                </div>
            </div>

            {{ $slot }}
        </div>
    </header>
</x-container>

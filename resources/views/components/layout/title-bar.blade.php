<header {{ $attributes }}>
    <x-dynamic-component :component="Str::contains(Route::currentRouteName(), ['create', 'edit']) ? 'container-narrow' : 'container'">
        <div class="border-b border-gray-100 py-6">
            <div class="flex items-center">
                @if($url = $getPreviousUrl())
                    <div class="flex-1 mr-4">
                        <a href="{{ $url }}" class="group btn btn-primary btn-secondary btn-sm text-base px-2">
                            <x-fas-chevron-left class="text-muted group-hover:text-brand-600" />
                        </a>
                    </div>
                @endif
                <div class="flex-grow leading-tight">
                    <h2 class="font-semibold text-base leading-tight text-gray-800 py-2">{{ $title }}</h2>
                </div>
                @if($actions ?? false)
                    <div class="flex items-center ml-4">
                        {!! $actions !!}
                    </div>
                @endif
            </div>
        </div>
    </x-dynamic-component>
</header>

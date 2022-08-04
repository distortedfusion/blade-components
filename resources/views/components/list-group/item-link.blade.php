<a href="{{ $url }}" class="list-group-item hover:no-underline hover:bg-gray-50">
    <div class="flex items-center">
        <div class="flex-grow flex items-baseline">
            @if(! is_null($title))
                <div class="w-1/3 flex-shrink-0">
                    <h3 class="text-xs text-muted font-semibold">{!! $title !!}</h3>
                </div>
            @endif
            <div class="flex-grow">{!! $slot ?: '&mdash;' !!}</div>
        </div>

        <div class="flex-no-shrink">
            <x-fas-angle-right class="text-muted" />
        </div>
    </div>
</a>

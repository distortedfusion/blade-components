<div class="list-group-item">
    <div class="flex items-baseline">
        @if(! is_null($title))
            <div class="w-1/3 flex-shrink-0">
                <h3 class="text-xs text-muted font-semibold">{!! $title !!}</h3>
            </div>
        @endif
        <div class="flex-grow">{!! $slot ?: '&mdash;' !!}</div>
    </div>
</div>

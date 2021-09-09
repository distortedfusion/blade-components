<div {{ $attributes->merge(['class' => sprintf('alert alert-%s flex items-start p-2 rounded', $type)]) }} role="alert">
    <div class="flex-shrink-0 leading-normal text-base">
        <i class="alert-icon fad fa-fw {{ $icon }}"></i>
    </div>

    <div class="ml-2">
        @if (! is_null($title))
            <div class="alert-title font-semibold">
                {{ $title }}
            </div>
        @endif

        {{ $slot }}
    </div>
</div>

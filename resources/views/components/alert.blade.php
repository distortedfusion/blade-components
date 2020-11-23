<div {{ $attributes->merge(['class' => sprintf('alert alert-%s flex items-center text-sm px-2 py-1 rounded-full mb-4', $type)]) }} role="alert">
    <div class="flex-shrink-0">
        <i class="alert-icon fad fa-fw {{ $icon }}"></i>
    </div>

    <div class="ml-3">
        @if (! is_null($title))
            <span class="alert-title font-semibold">
                {{ $title }}
            </span>
        @endif

        {{ $message }}
    </div>
</div>

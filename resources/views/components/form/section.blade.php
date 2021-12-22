<section class="form-section">
    @if ($title)
        <div class="flex items-center justify-between mb-6">
            <div class="flex-grow">
                <h3 class="text-lg leading-6 font-medium">{{ $title }}</h3>
                @if ($description)
                    <p class="mt-1 text-muted text-sm">{{ $description }}</p>
                @endif
            </div>

            @if ($action ?? false)
                <div class="flex-shrink-0 ml-2">{{ $action }}</div>
            @endif
        </div>
    @endif

    <div {{ $attributes->merge(['class' => 'grid grid-cols-1 gap-y-2 gap-x-4 sm:grid-cols-6']) }}>
        {{ $slot }}
    </div>
</section>

<div {{ $attributes->merge(['class' => 'text-center my-6']) }}>
    <h3>{{ $title }}</h3>

    <p class="text-muted text-sm mt-1">
        {{ $description }}
    </p>

    @if ($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>

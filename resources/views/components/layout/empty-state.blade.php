<div {{ $attributes->class(['text-center']) }}>
    @if($title ?? false)
        <x-heading :heading-level="3">{{ $title }}</x-heading>
    @endif
    <div class="text-gray-600 text-sm space-y-4 mt-2">
        {{ $slot }}
    </div>

    @if($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>

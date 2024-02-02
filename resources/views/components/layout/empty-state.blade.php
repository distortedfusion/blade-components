<div {{ $attributes->class(['text-center']) }}>
    <x-heading :heading-level="3" :as-heading="$asHeading" class="text-base leading-6 text-black dark:text-white py-2">{{ $title }}</x-heading>
    <div class="text-sm space-y-4">
        {{ $slot }}
    </div>

    @if($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>

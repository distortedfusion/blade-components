<div {{ $attributes->class(['text-center']) }}>
    <x-heading :heading-level="3" :as-heading="$asHeading">{{ $title }}</x-heading>
    <div class="text-gray-600 text-sm space-y-4 mt-2">
        {{ $slot }}
    </div>

    @if($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>

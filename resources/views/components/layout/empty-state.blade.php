<div {{ $attributes->class([
    'flex flex-col items-center text-center py-12',
]) }}>
    <x-heading size="flex" :heading-level="3" :as-heading="$asHeading" class="text-base leading-6 text-black dark:text-white py-2">{{ $title }}</x-heading>
    <div class="max-w-[64ch] text-sm space-y-4 [&_p]:text-gray-600 dark:[&_p]:text-gray-400">
        {{ $slot }}
    </div>

    @if($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>

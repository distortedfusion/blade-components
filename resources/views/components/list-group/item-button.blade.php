@aware(['flush'])
<div {{ $attributes->filter(
    fn ($value, $key) => ! Str::startsWith($key, 'wire:')
)->class([
    'list-group-item flex items-center w-full relative',
    'border-black/10',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    @if($prefix ?? false)
        <div {{ $prefix->attributes->class(['relative pr-1 pl-2 sm:pl-4 mr-1 border-r']) }}>
            {{ $prefix }}
        </div>
    @endif

    <button type="{{ $type }}" class="{{
        'flex-grow group block w-full rounded relative'
        . ' px-2 sm:px-4 -my-3 py-3'
        . ' text-current hover:no-underline'
        . ' hover:bg-gray-100'
    }}" {{ $attributes->filter(fn ($value, $key) => Str::startsWith($key, 'wire:')) }}>
        <div class="flex items-center space-x-2">
            @include('tailwind-layout::components.list-group.partials.title')
            <div class="flex-shrink-0 pr-4">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>

        @if(! is_null($icon))
            <div class="absolute inset-y-1/2 right-2 -mt-2">
                <x-dynamic-component :component="$icon" class="w-4 h-4 text-muted opacity-50 group-hover:opacity-100" />
            </div>
        @endif
    </button>

    @if($suffix ?? false)
        <div {{ $suffix->attributes->class(['relative pl-1 pr-2 sm:pr-4 ml-1 border-l']) }}>
            {{ $suffix }}
        </div>
    @endif
</div>

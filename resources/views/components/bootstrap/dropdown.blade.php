<div {{ $attributes->merge(['class' => 'dropdown'.($variant ? ' '.$variant : null)]) }}>
    @if (! ($toggle ?? false))
        <x-bootstrap.dropdown-button>
            {{ __('More') }}
        </x-bootstrap.dropdown-button>
    @else
        {{ $toggle }}
    @endif

    @if(! ($menu ?? false))
        <div class="dropdown-menu py-4 rounded-md border-black/10 dark:border-white/10 shadow-lg dropdown-menu-{{ $placement }}">
            @include('blade-components::components.bootstrap.dropdown-menu')
        </div>
    @else
        <div {{ $menu->attributes->class([
            'dropdown-menu py-4 rounded-md border-black/10 dark:border-white/10 shadow-lg dropdown-menu-'.$placement
        ]) }}>
            {{ $menu }}
        </div>
    @endif
</div>

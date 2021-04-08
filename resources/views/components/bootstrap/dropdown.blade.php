<div class="dropdown static{{ $variant ? ' '.$variant : null }}">
    @if (! ($toggle ?? false))
        <x-bootstrap.dropdown-button>
            {{ __('More') }}
        </x-bootstrap.dropdown-button>
    @else
        {{ $toggle }}
    @endif

    <div class="dropdown-menu dropdown-menu-{{ $placement }}">
        @if (! ($menu ?? false))
            @include('tailwind-layout::components.bootstrap.dropdown-menu')
        @else
            {{ $menu }}
        @endif
    </div>
</div>

<div class="dropdown static{{ $variant ? ' '.$variant : null }}">
    @if (! ($toggle ?? false))
        <x-bootstrap.dropdown-button>
            {{ __('More') }}
        </x-bootstrap.dropdown-button>
    @else
        {{ $toggle }}
    @endif

    <div class="dropdown-menu dropdown-menu-{{ $placement }}">
        @foreach ($actions as $action)
            <x-bootstrap.dropdown-action :action="$action['link'] ?? null" :inputs="$action['data'] ?? []" :method="$action['method'] ?? 'GET'" :show="$action['show'] ?? true">
                @if (isset($action['icon']))
                    <div class="flex flex-shrink-0 items-center justify-center w-6 mr-4 text-muted">
                        {!! $action['icon'] !!}
                    </div>
                @endif

                <div class="flex-grow text-base truncate">
                    {{ $action['title'] ?? null }}
                </div>
            </x-bootstrap.dropdown-action>
        @endforeach
    </div>
</div>

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

@foreach ($actions as $action)
    <x-bootstrap.dropdown-action class="space-x-2"
        :action="$action['link'] ?? null"
        :inputs="$action['data'] ?? []"
        :method="$action['method'] ?? 'GET'"
        :show="$action['show'] ?? true">
        <div class="flex-grow truncate">
            {{ $action['title'] ?? null }}
        </div>

        @if (isset($action['icon']))
            <div class="flex flex-shrink-0 items-center justify-center text-muted">
                <x-bootstrap.dropdown-icon :icon="$action['icon']" />
            </div>
        @endif
    </x-bootstrap.dropdown-action>
@endforeach

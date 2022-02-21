<div {{ $attributes->merge(['id' => 'sidebar'])->class([
    'fixed top-0 lg:left-0 w-64 h-full',
    'z-modal' => ! Str::contains($attributes->get('class'), 'z-'),
]) }}>
    {{ $slot }}
</div>

<div id="sidebarBackdrop" class="sidebar-backdrop fade"></div>

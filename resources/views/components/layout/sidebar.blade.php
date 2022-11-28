<div id="sidebarBackdrop" class="w-screen h-screen fixed top-0 left-0 z-offcanvas-backdrop fade"></div>
<div {{ $attributes->merge(['id' => 'sidebar'])->class([
    'fixed top-0 lg:left-0 w-64 h-full z-offcanvas',
]) }}>
    {{ $slot }}
</div>

<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trim($title) ?: __('Welcome') }} | {{ config('app.name', 'Distorted Fusion') }}</title>

    <link type="text/css" href="{{ mix('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('styles')
    @stack('scripts-head')
    <script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>
</head>
<body {{ $attributes->class([
    'text-black text-sm font-normal leading-normal font-sans antialiased',
    'bg-gray-50' => ! Str::contains($attributes->get('class'), 'bg-'),
]) }}>
    <div id="app" class="flex flex-col min-h-screen relative{{ $sidebar ?? false && ! empty($sidebar) ? ' lg:pl-64' : null }}">
        @if($sidebar ?? false)
            <x-layout.sidebar>
                {{ $sidebar }}
            </x-layout.sidebar>
        @endif

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @if($footer ?? false)
            <x-layout.footer>
                {{ $footer }}
            </x-layout.footer>
        @endif
    </div>

    @stack('modals')
    <livewire:scripts />
    @stack('scripts')
</body>
</html>

<div class="min-h-screen flex flex-col sm:justify-center items-center py-16">
    <div class="w-full sm:max-w-md">
        <div class="flex flex-col items-center text-center text-white">
            {{ $logo }}
        </div>
    </div>

    @if ($slot->isNotEmpty())
        <div class="flex-grow flex items-center">
            <div class="w-full sm:max-w-md">
                <x-container-narrow>
                    <div class="py-16">
                        <div class="text-center">
                            <p class="text-sm font-semibold text-gray-300 uppercase tracking-wide">{{ $error }}</p>
                            <h1 class="mt-2 text-4xl text-white tracking-tight sm:text-5xl">{{ $title }}</h1>
                            {{ $slot }}
                        </div>
                    </div>
                </x-container-narrow>
            </div>
        </div>
    @endif
</div>

<div class="min-h-screen flex flex-col sm:justify-center items-center py-16">
    <div class="flex-grow w-full flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md">
            <div class="flex flex-col items-center text-center">
                {{ $logo }}
            </div>
        </div>

        <div class="w-full sm:max-w-md mt-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="p-8">
                {{ $slot }}
            </div>

            @if($footer ?? false)
                <div class="px-8 py-4 bg-gray-200 border-t text-center">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>

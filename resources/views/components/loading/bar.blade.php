<div {{ $attributes->merge(['class' => 'flex flex-col items-center']) }}>
    <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden relative">
        @if(trim($slot) !== '')
            {{ $slot }}
        @else
            <div class="bg-brand-500 absolute inset-y-0 left-0 transition-all ease-out" style="width: {{ $percentage }}%;"></div>
        @endif
    </div>

    @if ($spinner)
        <x-layout.spinner />
    @endif
</div>

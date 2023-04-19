<section {{ $attributes->merge(['id' => $getSectionId()]) }}>
    <div class="flex items-center justify-between mb-8">
        <x-layout.section-title>{{ $title }}</x-layout.section-title>

        @if ($action)
            <div class="flex items-center ml-4">
                {{ $action }}
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 gap-8 sm:grid-cols-3">
        @if ($description)
            <div class="sm:col-span-1 space-y-6">
                {{ $description }}
            </div>
        @endif

        <div class="col-span-1 {{ ! $vertical ? ($description ? 'sm:col-span-2' : 'sm:col-span-3') : 'sm:col-span-3' }}">
            {{ $slot }}
        </div>
    </div>
</section>

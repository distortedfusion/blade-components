<section {{ $attributes->merge(['id' => $getSectionId()]) }}>
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl">{{ $title }}</h2>

        @if ($action)
            <div class="flex items-center ml-4">
                {{ $action }}
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 gap-8{{ ! $vertical ? ' sm:grid-cols-3' : null}}">
        @if ($description)
            <div class="col-span-1 space-y-6">
                {{ $description }}
            </div>
        @endif

        <div class="{{ ! $vertical ? ($description ? 'col-span-2' : 'col-span-3') : 'col-span-1' }}">
            {{ $slot }}
        </div>
    </div>
</section>

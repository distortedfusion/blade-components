@props([
    'title',
    'content',
    'footer',
])

<x-bootstrap.modal :id="$id" :size="$size" {{ $attributes }}>
    <div {{ $title->attributes->class(['modal-header']) }}>
        <x-heading :heading-level="5" size="flex" class="text-lg leading-normal font-normal mb-0">{{ $title }}</x-heading>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <x-fal-xmark class="w-4 h-4" aria-hidden="true" />
        </button>
    </div>

    <div {{ $content->attributes->class(['modal-body']) }}>
        {{ $content }}
    </div>

    <div {{ $footer->attributes->class([
        'modal-footer',
        'border-t border-black/10 dark:border-white/10',
        'rounded-b-lg',
    ]) }}>
        {{ $footer }}
    </div>
</x-bootstrap.modal>

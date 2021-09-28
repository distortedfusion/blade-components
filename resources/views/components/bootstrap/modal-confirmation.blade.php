@props([
    'title',
    'content',
    'footer',
])

<x-bootstrap.modal :id="$id" :size="$size" {{ $attributes->merge(['data-backdrop' => 'static']) }}>
    <div {{ $content->attributes->class(['modal-body', 'text-muted', 'text-center']) }}>
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full my-4 sm:my-6 {{ $iconContainerClass() }}">
            <i class="fas text-base fa-fw {{ $icon }}"></i>
        </div>

        <h5 class="modal-title">{{ $title }}</h5>

        {{ $content }}
    </div>

    <div {{ $footer->attributes->class(['modal-footer', 'bg-gray-50', 'border-t']) }}>
        {{ $footer }}
    </div>
</x-bootstrap.modal>

@props([
    'title',
    'content',
    'footer',
])

<x-bootstrap.modal :id="$id" :size="$size" {{ $attributes }}>
    <div {{ $title->attributes->class(['modal-header']) }}>
        <h5 class="modal-title">{{ $title }}</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="far fa-times" aria-hidden="true"></i>
        </button>
    </div>

    <div {{ $content->attributes->class(['modal-body']) }}>
        {{ $content }}
    </div>

    <div {{ $footer->attributes->class(['modal-footer', 'bg-gray-50', 'border-t']) }}>
        {{ $footer }}
    </div>
</x-bootstrap.modal>

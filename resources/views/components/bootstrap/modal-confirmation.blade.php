@props([
    'title',
    'content',
    'footer',
])
@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<x-bootstrap.modal :id="$id" :size="$size" {{ $attributes->merge(['data-backdrop' => 'static', 'data-keyboard' => 'false']) }}>
    <div {{ $content->attributes->class(['modal-body', 'text-center']) }}>
        <div {{ (new ComponentAttributeBag)->class([
            'h-12 w-12 border mx-auto flex items-center justify-center rounded-full my-4 sm:my-6',
            'text-gray-500 bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $style === null || $style === 'default',
            'text-green-500 bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $style === 'success',
            'text-blue-500 bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $style === 'info',
            'text-yellow-500 bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $style === 'warning',
            'text-red-500 bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $style === 'danger',
        ]) }}>
            <x-dynamic-component :component="$icon" />
        </div>

        <x-heading :heading-level="5" class="text-lg leading-normal mb-0">{{ $title }}</x-heading>

        {{ $content }}
    </div>

    <div {{ $footer->attributes->class([
        'modal-footer',
        'bg-white/5',
        'border-t border-black/10 dark:border-white/10',
        'rounded-b-lg',
    ]) }}>
        {{ $footer }}
    </div>
</x-bootstrap.modal>

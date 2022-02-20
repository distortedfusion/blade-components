<x-layouts.errors :title="__('Forbidden')">
    <x-errors.card :error="__('403 error')" :title="__('Forbidden')">
        <x-slot name="logo">
            <x-logo :width="116" :height="20" />
        </x-slot>

        <p class="mt-2 text-base text-gray-300">{{ __('Sorry, you are not allowed to access this page.') }}</p>
        @if ($message = $exception->getMessage())
            <p class="mt-2 text-base text-gray-300">{!! $message !!}</p>
        @endif
        <div class="mt-6">
            <a href="{{ ($previous = url()->previous()) && $previous !== url()->current() ? $previous : '/' }}" class="btn btn-sm btn-default btn-line">{{ __('Go back') }}</a>
        </div>
    </x-errors.card>
</x-layouts.errors>

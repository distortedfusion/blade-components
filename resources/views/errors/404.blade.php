<x-layouts.errors :title="__('Page Not Found')">
    <x-errors.card :error="__('404 error')" :title="__('Page Not Found')">
        <x-slot name="logo">
            <x-logo :width="116" :height="20" />
        </x-slot>

        <p class="mt-2 text-base text-gray-300">{{ __('Sorry, we could not find the page you are looking for.') }}</p>
        @if (($message = $exception->getMessage()) && (($previous = $exception->getPrevious()) && ! $previous instanceof \Illuminate\Database\Eloquent\ModelNotFoundException))
            <p class="mt-2 text-base text-gray-300">{!! $message !!}</p>
        @endif
        <div class="mt-6">
            <a href="{{ ($previous = url()->previous()) && $previous !== url()->current() ? $previous : '/' }}" class="btn btn-sm btn-default btn-line">{{ __('Go back') }}</a>
        </div>
    </x-errors.card>
</x-layouts.errors>

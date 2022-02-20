<x-layouts.errors :title="__('Page Expired')">
    <x-errors.card :error="__('419 error')" :title="__('Page Expired')">
        <x-slot name="logo">
            <x-logo :width="116" :height="20" />
        </x-slot>

        <p class="mt-2 text-base text-gray-300">{{ __('Sorry, your page session expired. This can happen when you have a page open for a longer period of time without any interaction.') }}</p>
        <div class="mt-6 flex-inline items-center space-x-2">
            <a href="{{ ($previous = url()->previous()) && $previous !== url()->current() ? $previous : '/' }}" class="btn btn-sm btn-default btn-line">{{ __('Go back') }}</a>
            <a href="{{ route('login') }}" class="btn btn-sm btn-default">{{ __('Sign-in') }}</a>
        </div>
    </x-errors.card>
</x-layouts.errors>

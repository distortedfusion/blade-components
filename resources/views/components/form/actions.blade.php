<x-form.section>
    <div class="col-span-3">
        @if ($cancelButton ?? false)
            {{ $cancelButton }}
        @else
            <a href="{{ $cancelUrl() }}" class="btn btn-block btn-default">
                {{ $cancelTitle ?: __('Cancel') }}
            </a>
        @endif
    </div>
    <div class="col-span-3">
        @if ($submitButton ?? false)
            {{ $submitButton }}
        @else
            <x-form-submit :class="sprintf('btn-block %s', $submitButtonClass())">
                {{ $submitTitle }}
            </x-form-submit>
        @endif
    </div>
</x-form.section>

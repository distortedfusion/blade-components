<x-form.section>
    <div class="col-span-3">
        <a href="{{ $cancelUrl() }}" class="btn btn-block btn-default">
            {{ $cancelTitle ?: __('Cancel') }}
        </a>
    </div>
    <div class="col-span-3">
        <x-form-submit :class="sprintf('btn-block %s', $submitButtonClass())">
            {{ $submitTitle }}
        </x-form-submit>
    </div>
</x-form.section>

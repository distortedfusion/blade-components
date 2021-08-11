<x-form.section>
    <div class="col-span-3">
        <a href="{{ $cancelUrl() }}"
            class="btn btn-block btn-default">
            {{ __('Cancel') }}
        </a>
    </div>
    <div class="col-span-3">
        <x-form-submit class="btn-block" />
    </div>
</x-form.section>

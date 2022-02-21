<div class="{{ $type === 'hidden' ? 'hidden' : null }}">
    <label class="floating-label">
        <input {{ $attributes
            ->merge(['placeholder' => $label ?: $name])
            ->class([
                'form-input',
                'text-black bg-white border-gray-300 shadow-sm rounded-md',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800 dark:shadow-none',
            ]) }}
            @if($isWired())
            wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
            name="{{ $name }}"
            value="{{ $value }}"
            @endif

            type="{{ $type }}" />

        <x-form-label class="floating" :label="$label" />
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

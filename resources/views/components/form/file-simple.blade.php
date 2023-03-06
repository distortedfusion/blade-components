<div>
    <label>
        <x-form-label :label="$label" />
        <input {{ $attributes
            ->merge(['placeholder' => $label ?: $name])
            ->class([
                'form-input rounded-md',
                'text-black bg-white border-gray-300 shadow-sm',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800 dark:shadow-none',
            ]) }}
            @if($isWired())
            wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
            name="{{ $name }}"
            value="{{ $value }}"
            @endif
            type="file" />
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

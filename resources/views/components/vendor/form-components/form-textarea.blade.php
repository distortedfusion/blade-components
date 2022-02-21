<div>
    <label class="block">
        <x-form-label :label="$label" />

        <textarea
            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            {{ $attributes->class([
                'form-textarea',
                'text-black bg-white border-gray-300 shadow-sm rounded-md',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800 dark:shadow-none',
            ]) }}
        >@unless($isWired()){!! $value !!}@endunless</textarea>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

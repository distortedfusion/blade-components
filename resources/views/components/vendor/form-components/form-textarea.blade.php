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
                'placeholder:font-semibold dark:placeholder:text-gray-200',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'shadow-sm dark:shadow-none' => ! Str::contains($attributes->get('class'), 'shadow-'),
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}
        >@unless($isWired()){!! $value !!}@endunless</textarea>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

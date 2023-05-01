<div>
    <label class="floating-label">
        <select
            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            @if($multiple)
                multiple
            @endif

            {{ $attributes->class([
                'form-select',
                'placeholder:font-semibold',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'shadow-sm dark:shadow-none' => ! Str::contains($attributes->get('class'), 'shadow-'),
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}>
            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>

        <x-form-label class="floating" :label="$label" />
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

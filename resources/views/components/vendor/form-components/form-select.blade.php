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
                'text-black bg-white border-gray-300 shadow-sm rounded-md',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800 dark:shadow-none',
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

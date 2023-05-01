<div class="{{ $type === 'hidden' ? 'hidden' : null }}">
    <div class="w-full flex items-stretch relative">
        @if($prefix ?? false)
            <span {{ $prefix->attributes->class([
                'form-input flex items-center w-auto rounded-l-md',
                'text-black bg-gray-50 border-gray-300 shadow-sm',
                'dark:text-white dark:bg-gray-800 dark:border-gray-700 dark:shadow-none',
            ]) }}>
                {{ $prefix }}
            </span>
        @endif

        <label class="flex-grow floating-label{{ ($prefix ?? false) !== false ? ' -ml-px' : null }}">
            <input {{ $attributes
                ->merge(['placeholder' => $label ?: $name])
                ->class([
                    'form-input',
                    'placeholder:font-semibold',
                    'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                    'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                    'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                    'shadow-sm dark:shadow-none' => ! Str::contains($attributes->get('class'), 'shadow-'),
                    'rounded-l-md' => ($prefix ?? false) === false,
                    'rounded-r-md' => ($suffix ?? false) === false,
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

        @if($suffix ?? false)
            <span {{ $suffix->attributes->class([
                'form-input flex items-center w-auto rounded-r-md -ml-px',
                'text-black bg-gray-50 border-gray-300 shadow-sm',
                'dark:text-white dark:bg-gray-800 dark:border-gray-800 dark:shadow-none',
            ]) }}>
                {{ $suffix }}
            </span>
        @endif
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

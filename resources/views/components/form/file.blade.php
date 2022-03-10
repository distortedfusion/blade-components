<div class="form-file" data-file="{{ $name }}">
    <div class="h-0 overflow-hidden">
        <input type="file"
            id="{{ $name.'_file' }}"
            @if($isWired())
            wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
            name="{{ $name }}"
            @endif />
    </div>

    <div class="flex items-start rounded-md shadow-sm">
        <label class="flex-grow floating-label">
            <input {!! $attributes
                ->merge(['placeholder' => $label ?: $name])
                ->class([
                    'form-input cursor-pointer',
                    'text-black bg-white border-gray-300 rounded-md rounded-r-none',
                    'dark:text-white dark:bg-gray-900 dark:border-gray-800',
                ]) !!}
                name="{{ $name.'_placeholder' }}"
                type="text" />
            <x-form-label class="floating" :label="$label" />
        </label>

        <label class="btn btn-default cursor-pointer leading-snug rounded-l-none rounded-r-md relative shadow-none -ml-1" for="{{ $name.'_file' }}">
            {{ $action ?? __('Select file') }}
        </label>
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

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
            <input {!! $attributes->merge([
                'class' => 'form-input cursor-pointer rounded-r-none shadow-none',
                'placeholder' => $label ?: $name,
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

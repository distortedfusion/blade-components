<div class="{{ $type === 'hidden' ? 'hidden' : null }}">
    <label class="floating-label">
        <input {!! $attributes->merge([
            'class' => 'form-input',
            'placeholder' => $label ?: $name,
            ]) !!}
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

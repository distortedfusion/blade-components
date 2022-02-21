<div>
    <label class="inline-flex items-center">
        <input {{ $attributes->class([
                'form-checkbox',
                'text-brand-500 border-gray-300',
            ]) }}
            type="radio"

            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            value="{{ $value }}"

            @if($checked)
                checked="checked"
            @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

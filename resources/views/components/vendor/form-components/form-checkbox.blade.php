<div class="flex flex-col">
    <label class="flex items-center">
        <input {{ $attributes->class([
                'form-checkbox',
                'text-brand-500 border-gray-300',
            ]) }}
            type="checkbox"
            value="{{ $value }}"

            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

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

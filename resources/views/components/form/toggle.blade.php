<div {!! $attributes->merge(['class' => 'flex flex-col']) !!}>
    <div class="flex items-center">
        <label class="toggle flex-shrink-0">
            <input id="{{ $name }}"
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
            <span class="slider round"></span>
        </label>

        <label class="flex-grow ml-4 leading-tight cursor-pointer select-none" for="{{ $name }}">
            <span class="font-medium">{{ $label }}</span>

            @if ($description ?? false)
                <p class="text-muted text-sm">{{ $description }}</p>
            @endif
        </label>
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

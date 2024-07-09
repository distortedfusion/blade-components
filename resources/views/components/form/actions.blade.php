<div {{ $attributes->class([
        'flex flex-col flex-col-reverse sm:flex-row items-center sm:space-x-4',
    ]) }}>
    <div class="flex-1 w-full mt-2 sm:mt-0">
        @if($cancelButton ?? false)
            {{ $cancelButton }}
        @else
            <x-btn style="default" class="w-full" :href="$cancelUrl()">
                {{ $cancelTitle ?: __('Cancel') }}
            </x-btn>
        @endif
    </div>
    <div class="flex-1 w-full">
        @if($submitButton ?? false)
            {{ $submitButton }}
        @else
            <x-btn type="submit" class="w-full" :style="$style ?? 'primary'" {{ $attributes->merge([
                'wire:loading.attr' => $forLivewire() ? 'disabled' : false,
            ]) }}>
                @if($forLivewire())
                    <div class="hidden" wire:loading.block>
                        <x-layout.pulser />
                    </div>
                @endif
                <div @if($forLivewire())wire:loading.class="hidden"@endif>
                    {!! $submitTitle ?: __('Submit') !!}
                </div>
            </x-btn>
        @endif
    </div>
</div>

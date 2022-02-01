<div class="flex items-center justify-between">
    <button {!! $attributes->merge([
            'class' => Str::contains($attributes->get('class'), array_keys(\DistortedFusion\Tailwind\Concerns\ButtonStyling::buttonStyles())) ? 'btn' : 'btn btn-primary',
            'type' => 'submit'
        ]) !!}
        @if($isWired())
        wire:loading.attr="disabled"
        @endif>
        @if($isWired())
            <div class="hidden" wire:loading.block>
                <x-layout.spinner class="p-0" />
            </div>
        @endif
        <div @if($isWired())wire:loading.class="hidden"@endif>
            {!! trim($slot) ?: __('Submit') !!}
        </div>
    </button>
</div>

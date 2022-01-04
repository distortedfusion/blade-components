<div class="flex items-center justify-between">
    <button {!! $attributes->merge([
        'class' => Str::contains($attributes->get('class'), array_keys(\DistortedFusion\Tailwind\Concerns\ButtonStyling::buttonStyles())) ? 'btn' : 'btn btn-primary',
        'type' => 'submit'
    ]) !!}>
        {!! trim($slot) ?: __('Submit') !!}
    </button>
</div>

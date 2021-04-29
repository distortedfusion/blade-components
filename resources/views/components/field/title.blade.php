<div {{ $attributes->merge(['class' => 'truncate']) }}>
    <span class="text-sm font-bold leading-5">{!! $title !!}</span>
    @if ($subTitle)
        <div class="text-muted text-xs font-medium leading-5">
            {!! $subTitle !!}
        </div>
    @endif
</div>

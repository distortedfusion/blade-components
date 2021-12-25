<div {{ $attributes->merge(['class' => 'truncate']) }}>
    <span class="text-sm font-bold leading-5">{!! $title ?? $slot !!}</span>
    @if ($subTitle ?? false)
        <div class="text-muted text-xs font-medium leading-5 truncate">
            {!! $subTitle !!}
        </div>
    @endif
</div>

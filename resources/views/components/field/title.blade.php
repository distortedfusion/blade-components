@props(['subTitle'])

<div {{ $attributes->class(['truncate' => $truncate]) }}>
    <span class="text-sm font-bold leading-5">{!! $title ?: $slot !!}</span>
    @if ($subTitle)
        <div {{ $subTitle->attributes->class([
            'text-xs font-medium leading-5',
            'text-muted' => ! Str::contains($subTitle->attributes->get('class'), 'text-'),
            'truncate' => $truncate,
        ]) }}>
            {!! $subTitle !!}
        </div>
    @endif
</div>

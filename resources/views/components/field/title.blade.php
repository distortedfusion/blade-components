@props(['subTitle'])

<div {{ $attributes->class(['truncate' => $truncate]) }}>
    <span class="font-bold">{!! $title ?: $slot !!}</span>
    @if ($subTitle)
        <div {{ $subTitle->attributes->class([
            'text-muted' => ! Str::contains($subTitle->attributes->get('class'), 'text-'),
            'truncate' => $truncate,
        ]) }}>
            {!! $subTitle !!}
        </div>
    @endif
</div>

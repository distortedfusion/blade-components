<div {{ $attributes->class(['truncate' => $truncate]) }}>
    <span class="text-sm font-bold leading-5">{!! $title ?: $slot !!}</span>
    @if ($subTitle)
        @php
        $subTitleAttributes = new \Illuminate\View\ComponentAttributeBag();
        @endphp
        <div {{ $subTitleAttributes->class([
            'text-muted text-xs font-medium leading-5',
            'truncate' => $truncate,
        ]) }}>
            {!! $subTitle !!}
        </div>
    @endif
</div>

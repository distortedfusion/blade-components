<span {{ $attributes }}>
    {!! $formattedData() !!}
    @if(!is_null($unit))
        <span>{{ $unit }}</span>
    @endif
</span>

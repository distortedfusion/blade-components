<option disabled aria-hidden="true">
    @if($after)
        {!! sprintf('%s %s', trim($slot), $entity) !!}
    @else
        {!! sprintf('%s %s', $entity, trim($slot)) !!}
    @endif
</option>

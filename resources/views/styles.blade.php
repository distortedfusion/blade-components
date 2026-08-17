:root.dark {
    color-scheme: dark;
}
@foreach ($definitions as $selector => $variables)
{{ $selector }} {
@foreach ($variables ?? [] as $name => $value)
    --{{ $name }}:{!! $value !!};
@endforeach
}
@endforeach

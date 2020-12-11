<button {{ $attributes->merge(['class' => 'btn btn-default']) }}
    type="button"
    data-toggle="dropdown"
    data-boundary="window"
    aria-haspopup="true"
    aria-expanded="false">
    {{ $slot }}
</button>

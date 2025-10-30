@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div data-slot="avatar-stack" {{ (new ComponentAttributeBag)->class([
    'flex flex-row-reverse items-center',

    '[&>[data-slot=avatar]:not(:first-child):is([data-size=lg])]:-mr-8',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=default])]:-mr-6',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=sm])]:-mr-4',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=xs])]:-mr-2',
]) }}>
    {{ $slot }}
</div>

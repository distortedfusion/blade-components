@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div {{ (new ComponentAttributeBag)->class([
    'flex flex-row-reverse items-center',
    '[&_*]:-mr-6 [&_*:first-child]:mr-0',
]) }}>
    {{ $slot }}
</div>

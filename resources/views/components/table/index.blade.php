@props(['caption' => 'bottom', 'hover' => false])
@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div data-slot="table-container" {{ (new ComponentAttributeBag)->class([
    'flex flex-col overflow-auto',
    $attributes->get('container:class') ?: '',
]) }}>
    <table data-slot="table" {{ $attributes->except('container:class')->class([
        '[:where(&)]:min-w-full table-fixed border-separate border-spacing-0 isolate',
        '[:where(&)]:text-sm whitespace-nowrap',

        // Caption placement...
        '[:where(&)]:caption-top' => $caption === 'top',
        '[:where(&)]:caption-bottom' => $caption === 'bottom',
    ]) }}>
        {{ $slot }}
    </table>
</div>

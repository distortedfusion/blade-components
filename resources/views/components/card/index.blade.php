@php
use Illuminate\Support\Str;
@endphp
<div {{ $attributes->class([
    'card rounded-lg',
    'border border-black/10 dark:border-white/10' => ! Str::contains($attributes->get('class'), ['border-']),
    'bg-white dark:bg-gray-950' => ! Str::contains($attributes->get('class'), ['bg-']),
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-green-500' => $style === 'success',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-blue-500' => $style === 'info',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-amber-500' => $style === 'warning',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-red-500' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>

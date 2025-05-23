{{-- click-target --}}
<div class="absolute inset-0 z-20"></div>
{{-- indicator --}}
<div class="p-2 -my-2 relative z-10">
    {{-- focus-indicator --}}
    <div class="absolute inset-0 z-0 bg-black/5 dark:bg-white/5 rounded opacity-0 transition group-focus-visible/indicator:opacity-100"></div>

    @if($indicator ?? false)
        {{ $indicator }}
    @else
        <x-dynamic-component :component="$indicatorIcon" class="size-4 text-[var(--foreground)] opacity-50 group-hover:opacity-100 group-focus/indicator:opacity-100 relative z-10" />
    @endif
</div>

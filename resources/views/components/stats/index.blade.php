<div {{ $attributes->class(['space-x-1']) }}>
    @if($title ?? false)
        <div class="text-xs text-muted font-semibold">{{ $title }}</div>
    @endif
    <div class="text-3xl font-semibold tracking-tight">{{ $slot }}</div>
  </div>

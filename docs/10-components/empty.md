---
title: Empty
description: Show a clear and informative empty state message or illustration when no content is available to guide users and improve the overall experience.
short-description: Display an empty state when no content is available.
icon: fasl-square-dashed
---

```blade-component-preview
<x-empty
    :icon="heroicon-o-book-open"
    :title="No Projects Yet"
    :description="You haven't created any projects yet.">
    <div class="flex items-center gap-2">
        <x-btn>Create Project</x-btn>
        <x-btn style="secondary">Import Projects</x-btn>
    </div>
    <x-btn style="ghost">
        Learn More
        <x-slot:suffix>
            <x-heroicon-o-arrow-top-right-on-square class="text-[var(--muted-foreground)]" />
        </x-slot:suffix>
    </x-btn>
</x-empty>
```

## Usage

```html
<x-empty
    :icon="heroicon-o-book-open"
    :title="No Projects Yet"
    :description="You haven't created any projects yet.">
    <x-btn>Create Project</x-btn>
</x-empty>
```

### Component API

| Attribute | Default | Description                                          |
| --------- | ------- | ---------------------------------------------------- |
| `title`   | `void`  | `string`<br>Controls the heading of the empty state. |

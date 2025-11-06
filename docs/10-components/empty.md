---
title: Empty
description: Show a clear and informative empty state message or illustration when no content is available to guide users and improve the overall experience.
short-description: Display an empty state when no content is available.
icon: fasl-square-dashed
---

```blade-component-preview
<x-empty
    icon="heroicon-o-book-open"
    title="No Projects Yet"
    description="You haven't created any projects yet. Get started by creating your first project.">
    <div class="flex items-center gap-2">
        <x-btn size="sm">Create Project</x-btn>
        <x-btn size="sm" style="secondary">Import Projects</x-btn>
    </div>
    <x-btn size="sm" style="ghost">
        Learn More
        <x-slot:suffix>
            <x-heroicon-o-arrow-top-right-on-square class="size-4 text-[var(--muted-foreground)]" />
        </x-slot:suffix>
    </x-btn>
</x-empty>
```

## Usage

```html
<x-empty
    icon="heroicon-o-book-open"
    title="No Projects Yet"
    description="You haven't created any projects yet." />
```

### Component API

| Attribute     | Default | Description                                                                 |
| ------------- | ------- | --------------------------------------------------------------------------- |
| `title`       | `void`  | `string`<br>Controls the heading of the empty state.                        |
| `description` | `null`  | `string`<br>Optional description after the heading.                         |
| `icon`        | `null`  | `string`<br>When set, adds a `<x-layout.icon` component before the heading. |

## Custom Description Markup

Instead of setting the `description` attribute, which will render its contents within a `<x-paragraph` component, the `description` slot can be used for custom markup.

```blade-component-code
<x-empty
    icon="heroicon-o-cloud"
    title="Cloud Storage Full">
    <x-slot:description>
        <x-paragraph>
            You've reached your storage limit. Upgrade your storage plan or review <a href="#">your usage</a>.
        </x-paragraph>
    </x-slot:description>
    <x-btn size="sm">
        Upgrade Plan
    </x-btn>
</x-empty>
```

## Custom Icon Markup

Instead of setting the `icon` attribute, which will use a `<x-layout.icon` component, the `icon` slot can be used for custom markup.

```blade-component-code
<x-empty
    title="No Team Members"
    description="Invite members to your team to collaborate on this project.">
    <x-slot:icon>
        <x-avatar.stack>
            <x-avatar />
            <x-avatar />
            <x-avatar />
        </x-avatar.stack>
    </x-slot:icon>

    <x-btn size="sm">
        <x-slot:prefix>
            <x-heroicon-o-user-plus class="size-4" />
        </x-slot:prefix>
        Invite Members
    </x-btn>
</x-empty>
```

## Additional Content

Instead of setting the `icon` attribute, which will use a `<x-layout.icon` component, the `icon` slot can be used for custom markup.

```blade-component-code
<x-empty
    title="404 - Not Found"
    description="The page you're looking for doesn't exist.">
    <div class="w-full max-w-3/4">
        <x-form-input name="search-page" placeholder="Search pages...">
            <x-slot:icon-prefix>
                <x-form-icon icon="heroicon-o-magnifying-glass" />
            </x-slot:icon-prefix>
        </x-form-input>
    </div>
    <x-paragraph>
        Need help? <a href="#">Contact support</a>
    </x-paragraph>
</x-empty>
```

# Layout

## Photo

```blade-component-code
<div class="grid grid-cols-3 gap-4 items-center">
    <x-layout.photo url="https://gravatar.com/avatar/3f76cdf0c0cfa00f10fd1216e15a410941cd9328746f963fc3258e6f147833d2?size=128" size="lg" />
    <x-layout.photo url="https://gravatar.com/avatar/3f76cdf0c0cfa00f10fd1216e15a410941cd9328746f963fc3258e6f147833d2?size=128" />
    <x-layout.photo url="https://gravatar.com/avatar/3f76cdf0c0cfa00f10fd1216e15a410941cd9328746f963fc3258e6f147833d2?size=128" size="sm" />
    <x-layout.photo url="" size="lg" />
    <x-layout.photo url="" />
    <x-layout.photo url="" size="sm" />
</div>
```

## Contained Icons

```blade-component-code
<div class="grid grid-cols-3 gap-4 items-center">
    <x-layout.icon icon="fal-user" style="primary" size="lg" />
    <x-layout.icon icon="fal-user" style="primary" />
    <x-layout.icon icon="fal-user" style="primary" size="sm" />
    <x-layout.icon icon="fal-user" style="secondary" size="lg" />
    <x-layout.icon icon="fal-user" style="secondary" />
    <x-layout.icon icon="fal-user" style="secondary" size="sm" />
    <x-layout.icon icon="fal-user" style="tertiary" size="lg" />
    <x-layout.icon icon="fal-user" style="tertiary" />
    <x-layout.icon icon="fal-user" style="tertiary" size="sm" />
</div>
```

## Progress Bar

```blade-component-code
<div class="space-y-4">
    <x-layout.progress-bar progress="75" size="lg" />
    <x-layout.progress-bar progress="50" />
    <x-layout.progress-bar progress="25" size="sm" />
</div>
```

## Spinner

```blade-component-code
<div class="mx-auto">
    <x-layout.spinner />
</div>
```

## Pulser

```blade-component-code
<div class="mx-auto">
    <x-layout.pulser />
</div>
```

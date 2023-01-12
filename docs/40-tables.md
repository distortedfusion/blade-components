# Tables

**Important:** Include the `tables.css` in your `app.css`.

```css
/* Typically the app.css is located in ./resources/css/ */
@import "./../../vendor/distortedfusion/laravel-tailwind-layout/resources/css/tables.css";
```

```blade-component
<x-table>
    <x-table.row>
        <x-table.heading is-first>First Name</x-table.heading>
        <x-table.heading>Last Name</x-table.heading>
        <x-table.heading is-last>Email</x-table.heading>
    </x-table.row>

    <x-table.row>
        <x-table.cell is-first>John</x-table.cell>
        <x-table.cell>Doe</x-table.cell>
        <x-table.cell is-last>john@example.com</x-table.cell>
    </x-table.row>

    <x-table.row>
        <x-table.cell is-even is-first>John</x-table.cell>
        <x-table.cell is-even>Doe</x-table.cell>
        <x-table.cell is-even is-last>john@example.com</x-table.cell>
    </x-table.row>

    <x-table.row>
        <x-table.cell is-first>John</x-table.cell>
        <x-table.cell>Doe</x-table.cell>
        <x-table.cell is-last>john@example.com</x-table.cell>
    </x-table.row>
</x-table>
```

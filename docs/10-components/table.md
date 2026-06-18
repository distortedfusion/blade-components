---
title: Table
description: Display structured data in a responsive table component.
short-description: A responsive table component.
icon: fasl-table
---

```blade-component-preview
@php
$rows = [
    ['INV001', 'Paid', 'Credit card', 10.00],
    ['INV002', 'Paid', 'Bank Transfer', 15.00],
    ['INV002', 'Paid', 'PayPal', 5.00],
    ['INV003', 'Refunded', 'Credit card', 20.00],
    ['INV004', 'Pending', 'Credit card', 50.00],
];
@endphp
<div class="w-full max-w-96">
    <x-table caption="bottom">
        <x-table-caption>A list of your recent invoices.</x-table-caption>
        <x-table-header>
            <x-table-row>
                <x-table-head>
                    Invoice
                </x-table-head>
                <x-table-head>
                    Status
                </x-table-head>
                <x-table-head>
                    Method
                </x-table-head>
                <x-table-head align="end">
                    Amount
                </x-table-head>
            </x-table-row>
        </x-table-header>
        <x-table-body highlight="even">
            @foreach($rows as $row)
                <x-table-row>
                    <x-table-head sticky>
                        {{ $row[0] }}
                    </x-table-head>
                    <x-table-cell>
                        {{ $row[1] }}
                    </x-table-cell>
                    <x-table-cell>
                        {{ $row[2] }}
                    </x-table-cell>
                    <x-table-cell align="end">
                        <x-currency :value="$row[3]" />
                    </x-table-cell>
                </x-table-row>
            @endforeach
        </x-table-body>
    </x-table>
</div>
```

## Usage

```html
<x-table>
    <x-table-caption>...</x-table-caption>
    <x-table-header>
        <x-table-row>
            <x-table-head>...</x-table-head>
        </x-table-row>
    </x-table-header>
    <x-table-body>
        <x-table-row>
            <x-table-cell>...</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## Composition

Use the following composition to build a table:

```text
x-table
├── x-table-caption
├── x-table-header
│   └── x-table-row
│       ├── x-table-head
│       ├── x-table-head
│       ├── x-table-head
│       └── x-table-head
└── x-table-body
    ├── x-table-row
    │   ├── x-table-cell
    │   ├── x-table-cell
    │   ├── x-table-cell
    │   └── x-table-cell
    └── x-table-row
        ├── x-table-cell
        ├── x-table-cell
        ├── x-table-cell
        └── x-table-cell
```

### Component API

#### x-table

| Attribute         | Default | Description                                                             |
| ----------------- | ------- | ----------------------------------------------------------------------- |
| `container:class` | `null`  | `string`<br>Helper attribute for adding classes to the table container. |
| `hover`           | `false` | `bool`<br>Controls highlighting of rows when hovered.                   |

#### x-header

| Attribute | Default | Description                                                  |
| --------- | ------- | ------------------------------------------------------------ |
| `sticky`  | `false` | `bool`<br>Makes the header sticky during vertical scrolling. |

#### x-body

| Attribute   | Default | Description                                                                                        |
| ----------- | ------- | -------------------------------------------------------------------------------------------------- |
| `highlight` | `null`  | `string`<br>Alternate highlighting for the contained rows. Possible values `null`, `even` or `odd`. |

#### x-row

| Attribute | Default | Description                                               |
| --------- | ------- | --------------------------------------------------------- |
| `sticky`  | `false` | `bool`<br>Makes the row sticky during vertical scrolling. |

#### x-head

| Attribute | Default | Description                                                                                                      |
| --------- | ------- | ---------------------------------------------------------------------------------------------------------------- |
| `align`   | `start` | `string`<br>Controls text alignment. Possible values `start`, `center` or `end`.                                 |
| `sticky`  | `false` | `bool`<br>Makes the cell sticky during horizontal scrolling. Only applies to the first or last element in a row. |

#### x-cell

| Attribute | Default | Description                                                                                                      |
| --------- | ------- | ---------------------------------------------------------------------------------------------------------------- |
| `align`   | `start` | `string`<br>Controls text alignment. Possible values `start`, `center` or `end`.                                 |
| `sticky`  | `false` | `bool`<br>Makes the cell sticky during horizontal scrolling. Only applies to the first or last element in a row. |

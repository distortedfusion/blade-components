---
title: Table
description: Display structured data in a responsive table component.
short-description: A responsive table component.
icon: fasl-table
---

```blade-component-preview
@php
$rows = [
    ['Paid', 'Credit card', 10.00],
    ['Paid', 'Bank Transfer', 15.00],
    ['Paid', 'PayPal', 5.00],
    ['Refunded', 'Credit card', 20.00],
    ['Pending', 'Credit card', 50.00],
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
            @foreach($rows as $i => $row)
                <x-table-row>
                    <x-table-head>
                        INV{{ str_pad(($i + 1), 3, 0, STR_PAD_LEFT) }}
                    </x-table-head>
                    <x-table-cell>
                        {{ $row[0] }}
                    </x-table-cell>
                    <x-table-cell>
                        {{ $row[1] }}
                    </x-table-cell>
                    <x-table-cell align="end">
                        <x-currency :value="$row[2]" />
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

## Row highlighting

Control `x-table-row` highlighting by supplying `even` or `odd` to the `highlight=""` attribute on the `x-table-body` component.

```blade-component-code
@php
$rows = [
    ['Paid', 'Credit card', 10.00],
    ['Paid', 'Bank Transfer', 15.00],
    ['Paid', 'PayPal', 5.00],
];
@endphp

<x-table>
    <x-table-body highlight="even">
        @foreach($rows as $i => $row)
            <x-table-row>
                <x-table-head>
                    INV{{ str_pad(($i + 1), 3, 0, STR_PAD_LEFT) }}
                </x-table-head>
                <x-table-cell>
                    {{ $row[0] }}
                </x-table-cell>
                <x-table-cell>
                    {{ $row[1] }}
                </x-table-cell>
                <x-table-cell align="end">
                    <x-currency :value="$row[2]" />
                </x-table-cell>
            </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

### Highlighting on hover

Alternatively `x-table-row` components can be highlighted on hover by supplying the `hover` boolean attribute on the `x-table` component.

```blade-component-code
@php
$rows = [
    ['Paid', 'Credit card', 10.00],
    ['Paid', 'Bank Transfer', 15.00],
    ['Paid', 'PayPal', 5.00],
];
@endphp

<x-table hover>
    <x-table-body>
        @foreach($rows as $i => $row)
            <x-table-row>
                <x-table-head>
                    INV{{ str_pad(($i + 1), 3, 0, STR_PAD_LEFT) }}
                </x-table-head>
                <x-table-cell>
                    {{ $row[0] }}
                </x-table-cell>
                <x-table-cell>
                    {{ $row[1] }}
                </x-table-cell>
                <x-table-cell align="end">
                    <x-currency :value="$row[2]" />
                </x-table-cell>
            </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

## Sticky header

Keep the `x-table-header` visible during vertical scrolling by supplying the `sticky` boolean attribute on the `x-table-header` component.

```blade-component-code
@php
$rows = [
    ['Paid', 'Credit card', 10.00],
    ['Paid', 'Bank Transfer', 15.00],
    ['Paid', 'PayPal', 5.00],
];
@endphp

<x-table container:class="max-h-80">
    <x-table-header sticky>
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
        @for($i=0; $i<10; $i++)
            @foreach($rows as $j => $row)
                <x-table-row>
                    <x-table-head>
                        INV{{ str_pad(($i * 3 + $j + 1), 3, 0, STR_PAD_LEFT) }}
                    </x-table-head>
                    <x-table-cell>
                        {{ $row[0] }}
                    </x-table-cell>
                    <x-table-cell>
                        {{ $row[1] }}
                    </x-table-cell>
                    <x-table-cell align="end">
                        <x-currency :value="$row[2]" />
                    </x-table-cell>
                </x-table-row>
            @endforeach
        @endfor
    </x-table-body>
</x-table>
```

## Sticky rows

Keep certain `x-table-row` components visible during vertical scrolling by supplying the `sticky` boolean attribute.

```blade-component-code
@php
$names = [
    'A' => ['Amara', 'Alden', 'Astrid', 'Aurelio', 'Anouk'],
    'B' => ['Bastian', 'Brielle', 'Bodhi', 'Beatrix', 'Bram'],
    'E' => ['Elowen', 'Evander', 'Esme', 'Emrys', 'Elodie'],
    'D' => ['Dashiell', 'Delia', 'Dorian', 'Dex', 'Delara'],
];
@endphp

<x-table container:class="max-h-80">
    <x-table-body>
        @foreach($names as $letter => $rows)
            <x-table-row sticky>
                <x-table-head>
                    {{ $letter }}
                </x-table-head>
            </x-table-row>
            @foreach($rows as $row)
                <x-table-row>
                    <x-table-cell>
                        {{ $row }}
                    </x-table-cell>
                </x-table-row>
            @endforeach
        @endforeach
    </x-table-body>
</x-table>
```

## Sticky cells

Keep important information visible during horizontal scrolling by supplying the `sticky` boolean attribute on the `x-table-head` and `x-table-cell` components.

```blade-component-code
@php
$rows = [
    ['Paid', 'Credit card', 10.00, '27ed00e0-a383-4483-b864-67e65cbb033d'],
    ['Paid', 'Bank Transfer', 15.00, 'b33256e6-a35d-4670-8b78-908f0035a827'],
    ['Paid', 'PayPal', 5.00, 'df3caae2-f945-4317-9db4-68fc605345b4'],
    ['Refunded', 'Credit card', 20.00, '36f19e85-6841-456c-9ddb-1ecdaa47dafd'],
    ['Pending', 'Credit card', 50.00, '22f60166-819e-4216-9d34-08e5cf3906f9'],
];
@endphp

<x-table container:class="max-h-80">
    <x-table-header sticky>
        <x-table-row>
            <x-table-head sticky>
                Invoice
            </x-table-head>
            <x-table-head>
                Status
            </x-table-head>
            <x-table-head>
                Method
            </x-table-head>
            <x-table-head>
                Amount
            </x-table-head>
            <x-table-head>
                Payment reference
            </x-table-head>
        </x-table-row>
    </x-table-header>
    <x-table-body highlight="even">
        @for($i=0; $i<10; $i++)
            @foreach($rows as $j => $row)
                <x-table-row>
                    <x-table-head sticky>
                        INV{{ str_pad(($i * 3 + $j + 1), 3, 0, STR_PAD_LEFT) }}
                    </x-table-head>
                    <x-table-cell>
                        {{ $row[0] }}
                    </x-table-cell>
                    <x-table-cell>
                        {{ $row[1] }}
                    </x-table-cell>
                    <x-table-cell>
                        <x-currency :value="$row[2]" />
                    </x-table-cell>
                    <x-table-cell>
                        {{ $row[3] }}
                    </x-table-cell>
                </x-table-row>
            @endforeach
        @endfor
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

## Component API

### x-table

| Attribute         | Default  | Description                                                                              |
| ----------------- | -------- | ---------------------------------------------------------------------------------------- |
| `container:class` | `null`   | `string`<br>Helper attribute for adding classes to the table container.                  |
| `hover`           | `false`  | `bool`<br>Controls highlighting of rows when hovered.                                    |
| `caption`         | `bottom` | `string`<br>Controls the `x-table-caption` placement. Possible values `bottom` or `top`. |

### x-header

| Attribute | Default | Description                                                  |
| --------- | ------- | ------------------------------------------------------------ |
| `sticky`  | `false` | `bool`<br>Makes the header sticky during vertical scrolling. |

### x-body

| Attribute   | Default | Description                                                                                        |
| ----------- | ------- | -------------------------------------------------------------------------------------------------- |
| `highlight` | `null`  | `string`<br>Alternate highlighting for the contained rows. Possible values `null`, `even` or `odd`. |

### x-row

| Attribute | Default | Description                                               |
| --------- | ------- | --------------------------------------------------------- |
| `sticky`  | `false` | `bool`<br>Makes the row sticky during vertical scrolling. |

### x-head

| Attribute | Default | Description                                                                      |
| --------- | ------- | -------------------------------------------------------------------------------- |
| `align`   | `start` | `string`<br>Controls text alignment. Possible values `start`, `center` or `end`. |
| `sticky`  | `false` | `bool`<br>Makes the cell sticky during horizontal scrolling.                     |

### x-cell

| Attribute | Default | Description                                                                      |
| --------- | ------- | -------------------------------------------------------------------------------- |
| `align`   | `start` | `string`<br>Controls text alignment. Possible values `start`, `center` or `end`. |
| `sticky`  | `false` | `bool`<br>Makes the cell sticky during horizontal scrolling.                     |

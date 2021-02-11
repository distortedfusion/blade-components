<?php

use DistortedFusion\Tailwind\Components;

return [
    'components' => [
        'alert' => Components\Alerts\Alert::class,
        'field.title' => Components\Field\Title::class,

        // Bootstrap...
        'bootstrap.dropdown' => Components\Bootstrap\Dropdown::class,
        'bootstrap.dropdown-action' => Components\Bootstrap\DropdownAction::class,
        'bootstrap.dropdown-button' => Components\Bootstrap\DropdownButton::class,

        // Containers...
        'container' => Components\Containers\Container::class,
        'container-narrow' => Components\Containers\ContainerNarrow::class,

        // Buttons...
        'form-button' => Components\Buttons\FormButton::class,

        // Table components...
        'table.cell' => Components\Tables\Cell::class,
        'table.header-group' => Components\Tables\HeaderGroup::class,
        'table.heading' => Components\Tables\Heading::class,
        'table.row-group' => Components\Tables\RowGroup::class,
        'table.row-link' => Components\Tables\RowLink::class,
        'table.row' => Components\Tables\Row::class,
        'table' => Components\Tables\Table::class,
    ],
];

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
        'table.cell' => Components\Table\Cell::class,
        'table.header-group' => Components\Table\HeaderGroup::class,
        'table.heading' => Components\Table\Heading::class,
        'table.row-group' => Components\Table\RowGroup::class,
        'table.row-link' => Components\Table\RowLink::class,
        'table.row' => Components\Table\Row::class,
        'table' => Components\Tables\Table::class,
    ],
];

<?php

use DistortedFusion\Tailwind\Components;

return [
    'components' => [
        'alert' => Components\Alerts\Alert::class,

        'carbon' => Components\DateTime\Carbon::class,

        // Fields...
        'field.boolean' => Components\Field\Boolean::class,
        'field.currency' => Components\Field\Currency::class,
        'field.title' => 'tailwind-layout::components.field.title',

        // Bootstrap...
        'bootstrap.dropdown-action' => Components\Bootstrap\DropdownAction::class,
        'bootstrap.dropdown-button' => Components\Bootstrap\DropdownButton::class,
        'bootstrap.dropdown-icon' => Components\Bootstrap\DropdownIcon::class,
        'bootstrap.dropdown-separator' => 'tailwind-layout::components.bootstrap.dropdown-separator',
        'bootstrap.dropdown' => Components\Bootstrap\Dropdown::class,

        'bootstrap.modal' => Components\Bootstrap\Modal::class,
        'bootstrap.modal-confirmation' => Components\Bootstrap\ModalConfirmation::class,
        'bootstrap.modal-dialog' => Components\Bootstrap\ModalDialog::class,

        // Card...
        'card.title' => Components\Card\Title::class,

        // Form...
        'form.actions' => Components\Form\Actions::class,
        'form.section' => Components\Form\Section::class,
        'form.sections' => Components\Form\Sections::class,

        // Form components...
        'form-button' => Components\Form\Button::class,
        'form-help' => Components\Form\Help::class,
        'form-toggle' => Components\Form\Toggle::class,

        // Layout...
        'layout.section' => Components\Layout\Section::class,
        'layout.section-group' => Components\Layout\SectionGroup::class,
        'layout.description' => Components\Layout\Description::class,
        'layout.empty-state' => Components\Layout\EmptyState::class,

        // Layout containers...
        'container' => Components\Layout\Containers\Container::class,
        'container-narrow' => Components\Layout\Containers\ContainerNarrow::class,

        // Table components...
        'table.cell' => Components\Tables\Cell::class,
        'table.header-group' => Components\Tables\HeaderGroup::class,
        'table.heading' => Components\Tables\Heading::class,
        'table.row-group' => Components\Tables\RowGroup::class,
        'table.row-link' => Components\Tables\RowLink::class,
        'table.row' => Components\Tables\Row::class,
        'table' => Components\Tables\Table::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Form Components
    |--------------------------------------------------------------------------
    |
    | This package provides markup for the protonemedia/laravel-form-components
    | package. These views are loaded during boot by overriding their respective
    | default config value.
    |
    | This behaviour can be disabled by removing entries from the array below.
    |
    | More information: https://github.com/protonemedia/laravel-form-components
    |
    */

    'form-components' => [
        'form' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form',
        ],
        'form-checkbox' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-checkbox',
        ],
        'form-errors' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-errors',
        ],
        'form-group' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-group',
        ],
        'form-input' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-input',
        ],
        'form-label' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-label',
        ],
        'form-radio' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-radio',
        ],
        'form-select' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-select',
        ],
        'form-submit' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-submit',
        ],
        'form-textarea' => [
            'view' => 'tailwind-layout::components.vendor.form-components.form-textarea',
        ],
    ],
];

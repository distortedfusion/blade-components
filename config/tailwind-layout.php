<?php

use DistortedFusion\Tailwind\Components;

return [
    'components' => [
        'alert' => Components\Alerts\Alert::class,
        'carbon' => Components\DateTime\Carbon::class,
        'pre' => 'tailwind-layout::components.pre.index',

        // Auth...
        'auth.card' => 'tailwind-layout::components.auth.card',
        'auth.session-status' => 'tailwind-layout::components.auth.session-status',

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

        // Fields...
        'field.boolean' => Components\Field\Boolean::class,
        'field.currency' => Components\Field\Currency::class,
        'field.title' => Components\Field\Title::class,

        // Form...
        'form.actions' => Components\Form\Actions::class,
        'form.section' => Components\Form\Section::class,
        'form.sections' => 'tailwind-layout::components.layout.section-group',

        // Form components...
        'form-button' => Components\Form\Button::class,
        'form-file' => Components\Form\File::class,
        'form-help' => Components\Form\Help::class,
        'form-select.description' => Components\Form\SelectDescription::class,
        'form-toggle' => Components\Form\Toggle::class,

        // Layout components...
        'layout.description' => Components\Layout\Description::class,
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.icon-muted' => Components\Layout\IconMuted::class,
        'layout.icon' => Components\Layout\Icon::class,
        'layout.page-action' => Components\Layout\PageAction::class,
        'layout.photo' => Components\Layout\Photo::class,
        'layout.section-group' => 'tailwind-layout::components.layout.section-group',
        'layout.section' => Components\Layout\Section::class,
        'layout.footer' => 'tailwind-layout::components.layout.footer',
        'layout.sidebar-toggle' => 'tailwind-layout::components.layout.sidebar-toggle',
        'layout.sidebar' => 'tailwind-layout::components.layout.sidebar',
        'layout.spinner' => 'tailwind-layout::components.layout.spinner',
        'layout.title-bar' => Components\Layout\TitleBar::class,

        // Layout containers...
        'container' => 'tailwind-layout::components.layout.containers.container',
        'container-narrow' => 'tailwind-layout::components.layout.containers.container-narrow',

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
    | This behavior can be disabled by removing entries from the array below.
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

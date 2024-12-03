<?php

use DistortedFusion\BladeComponents\Components;

return [
    'components' => [
        'alert' => Components\Alert\Index::class,

        // Text...
        'currency' => Components\Text\Currency::class,
        'date-time' => Components\Text\DateTime::class,
        'description' => 'blade-components::components.text.description',
        'heading' => Components\Text\Heading::class,
        'number' => Components\Text\Number::class,
        'ol' => 'blade-components::components.text.ol',
        'paragraph' => Components\Text\Paragraph::class,
        'pre' => 'blade-components::components.text.pre',
        'ul' => 'blade-components::components.text.ul',

        // Buttons...
        'btn' => Components\Btn\Index::class,
        'btn.icon' => 'blade-components::components.btn.icon',

        // Badges...
        'badge' => 'blade-components::components.badges.index',
        'badge.icon' => 'blade-components::components.badges.icon',

        // Bootstrap...
        'bootstrap.dropdown-action' => Components\Bootstrap\DropdownAction::class,
        'bootstrap.dropdown-button' => Components\Bootstrap\DropdownButton::class,
        'bootstrap.dropdown-icon' => Components\Bootstrap\DropdownIcon::class,
        'bootstrap.dropdown-separator' => 'blade-components::components.bootstrap.dropdown-separator',
        'bootstrap.dropdown' => Components\Bootstrap\Dropdown::class,

        'bootstrap.modal' => Components\Bootstrap\Modal::class,
        'bootstrap.modal-confirmation' => Components\Bootstrap\ModalConfirmation::class,
        'bootstrap.modal-dialog' => Components\Bootstrap\ModalDialog::class,

        // Card...
        'card.body' => 'blade-components::components.card.body',
        'card.footer' => 'blade-components::components.card.footer',
        'card.header' => 'blade-components::components.card.header',
        'card.title' => Components\Card\Title::class,
        'card' => Components\Card\Index::class,

        // Layout containers...
        'container' => 'blade-components::components.layout.container',

        // Entities...
        'entity.field' => 'blade-components::components.entity.field',

        // Form extra's...
        'form-actions' => Components\Form\Actions::class,

        // Layout components...
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.icon' => Components\Layout\Icon::class,
        'layout.nav-link' => 'blade-components::components.layout.nav-link',
        'layout.photo' => Components\Layout\Photo::class,
        'layout.title-bar' => Components\Layout\TitleBar::class,

        'layout.sections' => 'blade-components::components.layout.section-group',
        'layout.section-title' => Components\Layout\SectionTitle::class,
        'layout.section' => Components\Layout\Section::class,

        'layout.spinner' => 'blade-components::components.layout.spinner',
        'layout.progress-bar' => Components\Layout\ProgressBar::class,
        'layout.pulser' => 'blade-components::components.layout.pulser',

        'divider' => 'blade-components::components.layout.divider',

        // List group...
        'list-group' => Components\ListGroup\Index::class,
        'list-group.item' => Components\ListGroup\Item::class,
        'list-group.item-button' => Components\ListGroup\ItemButton::class,
        'list-group.item-link' => Components\ListGroup\ItemLink::class,
    ],
];

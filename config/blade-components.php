<?php

use DistortedFusion\BladeComponents\Components;

return [
    'components' => [
        // Accordion...
        'accordion.content' => 'blade-components::components.accordion.content',
        'accordion.title' => Components\Accordion\Title::class,
        'accordion.item' => 'blade-components::components.accordion.item',
        'accordion' => 'blade-components::components.accordion.index',

        // Alert...
        'alert' => Components\Alert\Index::class,

        // Avatar...
        'avatar' => Components\Avatar\Index::class,
        'avatar.stack' => 'blade-components::components.avatar.stack',

        // Button...
        'btn' => Components\Btn\Index::class,

        // Badge...
        'badge' => 'blade-components::components.badge.index',

        // Breadcrumbs...
        'breadcrumb' => 'blade-components::components.breadcrumb.index',
        'breadcrumb.item' => 'blade-components::components.breadcrumb.item',
        'breadcrumb.ellipsis' => 'blade-components::components.breadcrumb.ellipsis',
        'breadcrumb.separator' => 'blade-components::components.breadcrumb.separator',

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
        'card.title' => 'blade-components::components.card.title',
        'card' => 'blade-components::components.card.index',

        // Layout containers...
        'container' => 'blade-components::components.layout.container',

        // Entities...
        'entity.field' => 'blade-components::components.entity.field',

        // Progress Bar...
        'progress-bar' => 'blade-components::components.progress-bar.index',

        // Separator...
        'separator' => 'blade-components::components.separator.index',

        // Loading indicators...
        'spinner' => 'blade-components::components.spinner.index',
        'pulser' => 'blade-components::components.pulser.index',

        // Form extra's...
        'form-actions' => Components\Form\Actions::class,

        // Layout components...
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.icon' => 'blade-components::components.layout.icon',
        'layout.nav-link' => 'blade-components::components.layout.nav-link',
        'layout.title-bar' => Components\Layout\TitleBar::class,

        'divider' => 'blade-components::components.layout.divider',

        // List group...
        'list-group' => 'blade-components::components.list-group.index',
        'list-group.item' => Components\ListGroup\Item::class,
        'list-group.item-btn' => Components\ListGroup\ItemBtn::class,

        // List group - pre-composed elements...
        'list-group.precomposed.title' => 'blade-components::components.list-group.precomposed.title',

        // List group - Deprecated, use list-group.item instead...
        'list-group.item-button' => Components\ListGroup\ItemBtn::class,
        'list-group.item-link' => Components\ListGroup\Item::class,

        // Typography...
        'currency' => Components\Text\Currency::class,
        'date-time' => Components\Text\DateTime::class,
        'description' => 'blade-components::components.text.description',
        'heading' => Components\Text\Heading::class,
        'number' => Components\Text\Number::class,
        'ol' => 'blade-components::components.text.ol',
        'paragraph' => 'blade-components::components.text.paragraph',
        'pre' => 'blade-components::components.text.pre',
        'ul' => 'blade-components::components.text.ul',
    ],
];

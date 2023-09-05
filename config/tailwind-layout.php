<?php

use DistortedFusion\Tailwind\Components;

return [
    'components' => [
        'alert' => Components\Alert\Index::class,
        'stats.card' => Components\Stats\Card::class,

        // Elements...
        'badge' => Components\Elements\Badge::class,
        'boolean-badge' => Components\Elements\BooleanBadge::class,
        'btn' => Components\Btn\Index::class,
        'carbon' => Components\DateTime\Carbon::class,
        'pre' => 'tailwind-layout::components.pre.index',

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
        'card.body' => 'tailwind-layout::components.card.body',
        'card.footer' => 'tailwind-layout::components.card.footer',
        'card.header' => 'tailwind-layout::components.card.header',
        'card.title' => Components\Card\Title::class,
        'card' => 'tailwind-layout::components.card.index',

        // Layout containers...
        'container' => 'tailwind-layout::components.layout.containers.container',
        'container-narrow' => 'tailwind-layout::components.layout.containers.container-narrow',

        // Fields...
        'field.boolean' => Components\Field\Boolean::class,
        'field.currency' => Components\Field\Currency::class,
        'field.title' => Components\Field\Title::class,

        // Layout components...
        'layout.description' => Components\Layout\Description::class,
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.footer' => 'tailwind-layout::components.layout.footer',
        'layout.icon-muted' => Components\Layout\IconMuted::class,
        'layout.icon' => Components\Layout\Icon::class,
        'layout.nav-link' => 'tailwind-layout::components.layout.nav-link',
        'layout.page-action' => Components\Layout\PageAction::class,
        'layout.photo' => Components\Layout\Photo::class,
        'layout.section-group' => 'tailwind-layout::components.layout.section-group',
        'layout.section-title' => Components\Layout\SectionTitle::class,
        'layout.section' => Components\Layout\Section::class,
        'layout.sidebar-toggle' => 'tailwind-layout::components.layout.sidebar-toggle',
        'layout.sidebar' => 'tailwind-layout::components.layout.sidebar',
        'layout.spinner' => 'tailwind-layout::components.layout.spinner',
        'layout.title-bar' => Components\Layout\TitleBar::class,

        // Loading components...
        'loading.bar' => Components\Loading\Bar::class,
        'loading.pulser' => 'tailwind-layout::components.loading.pulser',

        // List group...
        'list-group' => Components\ListGroup\Index::class,
        'list-group.item' => Components\ListGroup\Item::class,
        'list-group.item-button' => Components\ListGroup\ItemButton::class,
        'list-group.item-link' => Components\ListGroup\ItemLink::class,

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

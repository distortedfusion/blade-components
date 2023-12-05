<?php

use DistortedFusion\Tailwind\Components;

return [
    'components' => [
        'alert' => Components\Alert\Index::class,
        'stats.card' => Components\Stats\Card::class,

        // Text...
        'heading' => Components\Text\Heading::class,
        'paragraph' => 'tailwind-layout::components.text.paragraph',
        'currency' => Components\Text\Currency::class,
        'date-time' => Components\Text\DateTime::class,
        'description' => 'tailwind-layout::components.text.description',
        'ol' => 'tailwind-layout::components.text.ol',
        'ul' => 'tailwind-layout::components.text.ul',
        'pre' => 'tailwind-layout::components.text.pre',

        // Buttons...
        'btn' => Components\Btn\Index::class,
        'btn.icon' => 'tailwind-layout::components.btn.icon',

        // Badges...
        'badge' => Components\Badges\Index::class,
        'badge.icon' => 'tailwind-layout::components.badges.icon',

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
        'card' => Components\Card\Index::class,

        // Layout containers...
        'container' => 'tailwind-layout::components.layout.containers.container',
        'container-narrow' => 'tailwind-layout::components.layout.containers.container-narrow',

        // Layout components...
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.icon' => Components\Layout\Icon::class,
        'layout.nav-link' => 'tailwind-layout::components.layout.nav-link',
        'layout.photo' => Components\Layout\Photo::class,
        'layout.title-bar' => Components\Layout\TitleBar::class,

        'layout.section-group' => 'tailwind-layout::components.layout.section-group',
        'layout.section-title' => Components\Layout\SectionTitle::class,
        'layout.section' => Components\Layout\Section::class,

        'layout.spinner' => 'tailwind-layout::components.layout.spinner',
        'layout.progress-bar' => Components\Layout\ProgressBar::class,
        'layout.pulser' => 'tailwind-layout::components.layout.pulser',

        // List group...
        'list-group' => Components\ListGroup\Index::class,
        'list-group.item' => Components\ListGroup\Item::class,
        'list-group.item-button' => Components\ListGroup\ItemButton::class,
        'list-group.item-link' => Components\ListGroup\ItemLink::class,
    ],
];

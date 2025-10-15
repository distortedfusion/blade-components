<?php

use DistortedFusion\BladeComponents\Components;

return [
    /*
    |--------------------------------------------------------------------------
    | Component prefix
    |--------------------------------------------------------------------------
    |
    | A prefix that should be applied to all registered components. This can
    | be used to prevent collisions between identically named components.
    |
    | Example with a prefix of `df`:
    | - Without: <x-btn></x-btn>
    | - With:    <x-df-btn></x-df-btn>
    |
    */

    'prefix' => null,

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | All components, including their backing class, that should be
    | registered during runtime.
    |
    */

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

        // Layout components...
        'layout.empty-state' => Components\Layout\EmptyState::class,
        'layout.icon' => 'blade-components::components.layout.icon',

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

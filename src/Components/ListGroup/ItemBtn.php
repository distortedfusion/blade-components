<?php

namespace DistortedFusion\BladeComponents\Components\ListGroup;

/**
 * @deprecated use the `<x-item` component directly with the `button` attribute
 */
class ItemBtn extends Item
{
    /**
     * Create the component instance.
     *
     * @param ?string     $href
     * @param string      $target
     * @param ?string     $title
     * @param string      $type
     * @param bool        $button
     * @param string|null $indicatorIcon
     */
    public function __construct(
        ?string $href = null,
        string $target = '_self',
        ?string $title = null,
        string $type = 'button',
        bool $button = false,
        ?string $indicatorIcon = null,
    ) {
        parent::__construct(
            button: true,

            href: $href,
            target: $target,
            title: $title,
            type: $type,
            indicatorIcon: $indicatorIcon,
        );
    }
}

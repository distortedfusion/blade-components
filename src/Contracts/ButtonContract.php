<?php

namespace DistortedFusion\Tailwind\Contracts;

interface ButtonContract
{
    const DEFAULT_STYLE = 'primary';
    const STYLES = [
        'primary' => 'btn-primary',
        'default' => 'btn-default',
        'success' => 'btn-success',
        'info' => 'btn-info',
        'warning' => 'btn-warning',
        'danger' => 'btn-danger',
    ];
}

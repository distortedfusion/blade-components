<?php

namespace DistortedFusion\BladeComponents\Enums;

enum ThemeVariable: string
{
    case BACKGROUND = 'background';
    case FOREGROUND = 'foreground';

    case PRIMARY = 'primary';
    case PRIMARY_FOREGROUND = 'primary-foreground';

    case SECONDARY = 'secondary';
    case SECONDARY_FOREGROUND = 'secondary-foreground';

    case ACCENT = 'accent';
    case ACCENT_FOREGROUND = 'accent-foreground';

    case MUTED = 'muted';
    case MUTED_FOREGROUND = 'muted-foreground';

    case CARD = 'card';
    case CARD_FOREGROUND = 'card-foreground';

    case BORDER = 'border';
    case INPUT = 'input';
    case RING = 'ring';

    case SUCCESS = 'success';
    case SUCCESS_FOREGROUND = 'success-foreground';
    case INFO = 'info';
    case INFO_FOREGROUND = 'info-foreground';
    case WARNING = 'warning';
    case WARNING_FOREGROUND = 'warning-foreground';
    case DANGER = 'danger';
    case DANGER_FOREGROUND = 'danger-foreground';

    case RADIUS = 'radius';
    case RADIUS_INNER = 'radius-inner';
}

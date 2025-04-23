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

    case RADIUS = 'radius';
}

<?php

namespace DistortedFusion\BladeComponents;

use DistortedFusion\BladeComponents\Concerns\ManagesAlertIcons;
use DistortedFusion\BladeComponents\Concerns\ManagesAvatarIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesListGroupItemIndicatorIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesTheme;
use DistortedFusion\BladeComponents\Concerns\ManagesTitleBarPreviousIcon;

class BladeComponents
{
    use ManagesAlertIcons;
    use ManagesAvatarIcon;
    use ManagesListGroupItemIndicatorIcon;
    use ManagesTheme;
    use ManagesTitleBarPreviousIcon;
}

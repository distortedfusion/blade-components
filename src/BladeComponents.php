<?php

namespace DistortedFusion\BladeComponents;

use DistortedFusion\BladeComponents\Concerns\ChecksClass;
use DistortedFusion\BladeComponents\Concerns\ManagesAlertIcons;
use DistortedFusion\BladeComponents\Concerns\ManagesAvatarIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesBreadcrumbIcons;
use DistortedFusion\BladeComponents\Concerns\ManagesListGroupItemIndicatorIcon;

class BladeComponents
{
    use ChecksClass;
    use ManagesAlertIcons;
    use ManagesAvatarIcon;
    use ManagesBreadcrumbIcons;
    use ManagesListGroupItemIndicatorIcon;
}

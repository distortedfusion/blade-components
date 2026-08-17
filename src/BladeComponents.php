<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents;

use DistortedFusion\BladeComponents\Concerns\ChecksClass;
use DistortedFusion\BladeComponents\Concerns\ManagesAccordionIndicatorIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesAlertIcons;
use DistortedFusion\BladeComponents\Concerns\ManagesAssets;
use DistortedFusion\BladeComponents\Concerns\ManagesAvatarIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesBreadcrumbIcons;
use DistortedFusion\BladeComponents\Concerns\ManagesListGroupItemIndicatorIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesSidebarToggleIcon;
use DistortedFusion\BladeComponents\Concerns\ManagesThemes;

class BladeComponents
{
    use ChecksClass;
    use ManagesAssets;
    use ManagesThemes;

    // Icon helpers...
    use ManagesAccordionIndicatorIcon;
    use ManagesAlertIcons;
    use ManagesAvatarIcon;
    use ManagesBreadcrumbIcons;
    use ManagesListGroupItemIndicatorIcon;
    use ManagesSidebarToggleIcon;

    /**
     * Resolve the component alias with the optional prefix.
     *
     * @param string $alias
     *
     * @return string
     */
    public static function componentAliasWithPrefix(string $alias): string
    {
        $prefix = config('blade-components.prefix', null);

        if (is_null($prefix) || trim($prefix) === '') {
            return $alias;
        }

        return $prefix.'-'.$alias;
    }
}

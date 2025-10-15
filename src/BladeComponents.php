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

<?php
declare(strict_types=1);

namespace GuzabaPlatform\Tags;

use GuzabaPlatform\Components\Base\Interfaces\ComponentInterface;
use GuzabaPlatform\Components\Base\Traits\ComponentTrait;

/**
 * Class Component
 * @package Azonmedia\Tags
 */
class Component implements ComponentInterface
{

    use ComponentTrait;

    protected const COMPONENT_NAME = "Tags";
    //https://components.platform.guzaba.org/component/{vendor}/{component}
    protected const COMPONENT_URL = 'https://components.platform.guzaba.org/component/azonmedia/tags';
    protected const COMPONENT_NAMESPACE = 'GuzabaPlatform\\Tags';
    protected const COMPONENT_VERSION = 'dev';
    protected const VENDOR_NAME = 'Azonmedia';
    protected const VENDOR_URL = 'https://azonmedia.com';

    public static function post_installation_hook(): bool
    {
        // TODO: Implement post_installation_hook() method.
        print 'AAAA package post installation hook'.PHP_EOL;
        return TRUE;
    }
}
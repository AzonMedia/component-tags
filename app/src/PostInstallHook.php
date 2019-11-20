<?php
declare(strict_types=1);

namespace GuzabaPlatform\Tags;

use Composer\Installer\PackageEvent;
use GuzabaPlatform\Components\Base\Interfaces\PostInstallHookInterface;
use GuzabaPlatform\Components\Base\Traits\PostInstallHookTrait;

/**
 * Class PostInstall
 * @package GuzabaPlatform\Tags
 * This is the only class of the package that is supposed to be loaded by the composer autoloader.
 * It is used by the post-install hook/script.
 * https://getcomposer.org/doc/articles/scripts.md
 */
abstract class PostInstallHook implements PostInstallHookInterface
{
    use PostInstallHookTrait;

    public static function post_installation_hook(PackageEvent $PackageEvent): bool
    {
        // TODO: Implement post_installation_hook() method.
        print 'AAAA package post installation hook'.PHP_EOL;
        return TRUE;
    }
}
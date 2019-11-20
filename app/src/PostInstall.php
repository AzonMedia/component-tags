<?php
declare(strict_types=1);

namespace GuzabaPlatform\Tags;

use GuzabaPlatform\Components\Base\Interfaces\PostInstallInterface;
use GuzabaPlatform\Components\Base\Traits\PostInstallTrait;

/**
 * Class PostInstall
 * @package GuzabaPlatform\Tags
 * This is the only class of the package that is supposed to be loaded by the composer autoloader.
 * It is used by the post-install hook/script.
 * https://getcomposer.org/doc/articles/scripts.md
 */
abstract class PostInstall implements PostInstallInterface
{
    use PostInstallTrait;

    //"post-package-install": "GuzabaPlatform\\Platform\\Components\\Models\\PostInstall::post_install_script"
}
<?php


namespace GuzabaPlatform\Tags;


use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use GuzabaPlatform\Installer\Installer;
use GuzabaPlatform\Installer\Interfaces\PostInstallHookInterface;

class PostInstall implements PostInstallHookInterface
{
    public static function post_install_hook(Installer $Installer, InstalledRepositoryInterface $Repo, PackageInterface $Package) : void
    {
        //debug
        print 'This is output form the post install hook'.PHP_EOL;
    }
}
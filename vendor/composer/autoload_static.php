<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita13141c210faae25ed5636479ec92080
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita13141c210faae25ed5636479ec92080::$classMap;

        }, null, ClassLoader::class);
    }
}
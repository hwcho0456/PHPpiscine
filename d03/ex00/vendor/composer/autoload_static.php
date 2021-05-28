<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ee6e455ffa096dde24a69f4fb76c177
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ee6e455ffa096dde24a69f4fb76c177::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ee6e455ffa096dde24a69f4fb76c177::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ee6e455ffa096dde24a69f4fb76c177::$classMap;

        }, null, ClassLoader::class);
    }
}

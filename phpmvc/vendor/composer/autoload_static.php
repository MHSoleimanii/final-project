<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc694591756d4e9e8d84e26aa12d19236
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahdi\\Phpmvc\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahdi\\Phpmvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc694591756d4e9e8d84e26aa12d19236::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc694591756d4e9e8d84e26aa12d19236::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc694591756d4e9e8d84e26aa12d19236::$classMap;

        }, null, ClassLoader::class);
    }
}
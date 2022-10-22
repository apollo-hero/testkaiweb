<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcccc368d9b887c104f567b741f50a50e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcccc368d9b887c104f567b741f50a50e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcccc368d9b887c104f567b741f50a50e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcccc368d9b887c104f567b741f50a50e::$classMap;

        }, null, ClassLoader::class);
    }
}

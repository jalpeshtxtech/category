<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf00336355dee7fe1680a2069261bf4b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Txtech\\Category\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Txtech\\Category\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf00336355dee7fe1680a2069261bf4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf00336355dee7fe1680a2069261bf4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf00336355dee7fe1680a2069261bf4b::$classMap;

        }, null, ClassLoader::class);
    }
}
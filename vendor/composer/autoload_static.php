<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f675ceaf1105018e16f022feff6d3c1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f675ceaf1105018e16f022feff6d3c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f675ceaf1105018e16f022feff6d3c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f675ceaf1105018e16f022feff6d3c1::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1f8853b11b7835c1d3da5c347e83ad1
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Health\\Ant\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Health\\Ant\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1f8853b11b7835c1d3da5c347e83ad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1f8853b11b7835c1d3da5c347e83ad1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

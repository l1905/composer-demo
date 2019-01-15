<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84e90abe3049b8432fd0504fb296e31c
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'litong\\composer_demo\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'litong\\composer_demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84e90abe3049b8432fd0504fb296e31c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84e90abe3049b8432fd0504fb296e31c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

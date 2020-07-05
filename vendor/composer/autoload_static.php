<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13612b37361a68de952706ba4289c2df
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sunxyw\\Console\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sunxyw\\Console\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13612b37361a68de952706ba4289c2df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13612b37361a68de952706ba4289c2df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
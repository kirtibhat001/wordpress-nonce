<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcca73292fd0d3af980677d3a4300703c
{
    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'Nonces' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitcca73292fd0d3af980677d3a4300703c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

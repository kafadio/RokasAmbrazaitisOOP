<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf982cbb185d301448adc6d15b8cc398b
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'userApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'userApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf982cbb185d301448adc6d15b8cc398b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf982cbb185d301448adc6d15b8cc398b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
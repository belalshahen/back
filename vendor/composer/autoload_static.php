<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73b938f383cb8fb2a3247319aa1ebe0a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shaheen\\Inspire\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shaheen\\Inspire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit73b938f383cb8fb2a3247319aa1ebe0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73b938f383cb8fb2a3247319aa1ebe0a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73b938f383cb8fb2a3247319aa1ebe0a::$classMap;

        }, null, ClassLoader::class);
    }
}

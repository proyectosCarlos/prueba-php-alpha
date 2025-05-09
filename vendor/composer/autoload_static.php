<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit697d72d2eff895729c0a6f456aa2bffd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carlos\\App\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carlos\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit697d72d2eff895729c0a6f456aa2bffd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit697d72d2eff895729c0a6f456aa2bffd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit697d72d2eff895729c0a6f456aa2bffd::$classMap;

        }, null, ClassLoader::class);
    }
}

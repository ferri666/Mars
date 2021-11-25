<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b2a69cdff3c3ef39b9d2b9c0bb1e173
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Ferran\\Final\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ferran\\Final\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b2a69cdff3c3ef39b9d2b9c0bb1e173::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b2a69cdff3c3ef39b9d2b9c0bb1e173::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b2a69cdff3c3ef39b9d2b9c0bb1e173::$classMap;

        }, null, ClassLoader::class);
    }
}
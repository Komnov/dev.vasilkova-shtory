<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit515174bd7a3369551a131feca1e211ca
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Coderun\\BuyOneClick\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Coderun\\BuyOneClick\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit515174bd7a3369551a131feca1e211ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit515174bd7a3369551a131feca1e211ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit515174bd7a3369551a131feca1e211ca::$classMap;

        }, null, ClassLoader::class);
    }
}
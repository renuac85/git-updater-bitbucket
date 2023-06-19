<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe4e5443566419180892616d97d19069
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fragen\\Git_Updater\\Bitbucket\\' => 29,
            'Fragen\\Git_Updater\\API\\' => 23,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fragen\\Git_Updater\\Bitbucket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fragen\\Git_Updater\\API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Bitbucket',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe4e5443566419180892616d97d19069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe4e5443566419180892616d97d19069::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe4e5443566419180892616d97d19069::$classMap;

        }, null, ClassLoader::class);
    }
}

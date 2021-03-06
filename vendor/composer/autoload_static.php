<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4513dca93b8846ca9d333fc1f8476325
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Portfolio\\models\\' => 17,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Portfolio\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4513dca93b8846ca9d333fc1f8476325::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4513dca93b8846ca9d333fc1f8476325::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4513dca93b8846ca9d333fc1f8476325::$classMap;

        }, null, ClassLoader::class);
    }
}

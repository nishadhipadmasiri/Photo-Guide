<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7a6996ddccac027c2be5a261ab919dd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita7a6996ddccac027c2be5a261ab919dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7a6996ddccac027c2be5a261ab919dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7a6996ddccac027c2be5a261ab919dd::$classMap;

        }, null, ClassLoader::class);
    }
}

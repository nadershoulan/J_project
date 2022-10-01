<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit783ee8b1c0830b21d61ec9e28d5ef664
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit783ee8b1c0830b21d61ec9e28d5ef664::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit783ee8b1c0830b21d61ec9e28d5ef664::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit783ee8b1c0830b21d61ec9e28d5ef664::$classMap;

        }, null, ClassLoader::class);
    }
}
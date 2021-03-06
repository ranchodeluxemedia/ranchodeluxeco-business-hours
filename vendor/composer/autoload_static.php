<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcabd16b5cc65806911922892372c8a9a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Translation\\' => 30,
            'Spatie\\OpeningHours\\' => 20,
        ),
        'C' => 
        array (
            'Cmixin\\' => 7,
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Spatie\\OpeningHours\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/opening-hours/src',
        ),
        'Cmixin\\' => 
        array (
            0 => __DIR__ . '/..' . '/cmixin/business-day/src/Cmixin',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/cmixin/business-time/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcabd16b5cc65806911922892372c8a9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcabd16b5cc65806911922892372c8a9a::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitcabd16b5cc65806911922892372c8a9a::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}

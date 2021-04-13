<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite440f315f6a065c6f51576f14b7215b0
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XENONMC\\XPFRAME\\Router\\' => 23,
            'XENONMC\\XPFRAME\\Mvc\\' => 20,
            'XENONMC\\XPFRAME\\Errors\\' => 23,
            'XENONMC\\XPFRAME\\' => 16,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'I' => 
        array (
            'InfluxDB2\\' => 10,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XENONMC\\XPFRAME\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenonmc/xpframe-router/src',
        ),
        'XENONMC\\XPFRAME\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenonmc/xpframe-mvc/src',
        ),
        'XENONMC\\XPFRAME\\Errors\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenonmc/xpframe-errors/src',
        ),
        'XENONMC\\XPFRAME\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'InfluxDB2\\' => 
        array (
            0 => __DIR__ . '/..' . '/influxdata/influxdb-client-php/src/InfluxDB2',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$classMap;

        }, null, ClassLoader::class);
    }
}

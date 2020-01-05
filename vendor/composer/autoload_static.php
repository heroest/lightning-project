<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit237d5223d80d7f022b0b0d9f6d29050e
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '972fda704d680a3a53c68e34e193cb22' => __DIR__ . '/..' . '/react/promise-timer/src/functions_include.php',
        'cea474b4340aa9fa53661e887a21a316' => __DIR__ . '/..' . '/react/promise-stream/src/functions_include.php',
        'ebf8799635f67b5d7248946fe2154f4a' => __DIR__ . '/..' . '/ringcentral/psr7/src/functions_include.php',
        '3b19f57173702f59c7c3709b47ba8787' => __DIR__ . '/..' . '/heroest/lightning-react-framework/src/function_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Contracts\\EventDispatcher\\' => 34,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'R' => 
        array (
            'RingCentral\\Psr7\\' => 17,
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\Stream\\' => 21,
            'React\\Promise\\' => 14,
            'React\\Http\\' => 11,
            'React\\HttpClient\\' => 17,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'Lightning\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Contracts\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher-contracts',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'RingCentral\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/ringcentral/psr7/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-stream/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/http/src',
        ),
        'React\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/http-client/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Lightning\\' => 
        array (
            0 => __DIR__ . '/..' . '/heroest/lightning-react-framework/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit237d5223d80d7f022b0b0d9f6d29050e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit237d5223d80d7f022b0b0d9f6d29050e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit237d5223d80d7f022b0b0d9f6d29050e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

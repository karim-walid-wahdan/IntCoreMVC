<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdbd8acaa375c45afa1787bac0bab9e9c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdbd8acaa375c45afa1787bac0bab9e9c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbd8acaa375c45afa1787bac0bab9e9c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbd8acaa375c45afa1787bac0bab9e9c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

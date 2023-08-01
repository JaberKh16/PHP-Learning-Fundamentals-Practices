<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc5d7f8bc7141195818aaf99646b5669a
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

        spl_autoload_register(array('ComposerAutoloaderInitc5d7f8bc7141195818aaf99646b5669a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc5d7f8bc7141195818aaf99646b5669a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc5d7f8bc7141195818aaf99646b5669a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

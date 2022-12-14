<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc999ef5fb8d3f470350191161e36495b
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

        spl_autoload_register(array('ComposerAutoloaderInitc999ef5fb8d3f470350191161e36495b', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc999ef5fb8d3f470350191161e36495b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc999ef5fb8d3f470350191161e36495b::getInitializer($loader));

        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc999ef5fb8d3f470350191161e36495b::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec999ef5fb8d3f470350191161e36495b($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec999ef5fb8d3f470350191161e36495b($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}

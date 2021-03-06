<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4464efd56a4bcc52b73d45a84a179f7
{
    public static $classMap = array (
        'Brain' => __DIR__ . '/../..' . '/classes/Brain.php',
        'Colors' => __DIR__ . '/../..' . '/classes/Colors.php',
        'Elevator' => __DIR__ . '/../..' . '/classes/Elevator.php',
        'People' => __DIR__ . '/../..' . '/classes/People.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite4464efd56a4bcc52b73d45a84a179f7::$classMap;

        }, null, ClassLoader::class);
    }
}

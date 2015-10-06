<?php

spl_autoload_register(
    function ($classname) {
        $new_classname = end(explode('\\', $classname));
        $filepath = __DIR__ . '/classes/' . $new_classname . '.php';

        if (is_readable($filepath)) {
            require $filepath;
        }
    }
);

require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../index.php';
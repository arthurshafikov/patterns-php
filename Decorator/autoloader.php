<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';

    return file_exists($file)
        ? require($file)
        : false;
});

<?php

set_include_path(implode(PATH_SEPARATOR, array(
    __DIR__,
    __DIR__ . '/../lib',
    get_include_path()
)));

spl_autoload_register(function($className) {
    if (substr($className, 0, 6) === 'Events') {
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, trim($className, '\\')) . '.php';
        require_once $filename;
    }
});

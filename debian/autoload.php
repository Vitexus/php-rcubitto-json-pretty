<?php

// Debian autoloader for rcubitto/json-pretty
spl_autoload_register(function ($class) {
    $prefix = 'Rcubitto\\JsonPretty\\';
    $baseDir = '/usr/share/php/Rcubitto/JsonPretty/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

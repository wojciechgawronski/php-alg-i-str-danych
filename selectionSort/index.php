<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);

if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', "<br>");
}


try {
    $arr = [20,45,93,67,10,97,52,88,33,92];
    $bs = new SelectionSort();
    $arr1 = $bs->sort($arr);
    echo implode(' ', $arr1) . EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}

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
    $bs = new BubbleSort();
    $arr1 = [20, 45, 20, 93, 67,10,97,52,88,33, 92];
    $arr2 = [20, 45, 20, 93, 67,10,97,52,88,33, 92];
    $bs->sort($arr1);
    echo implode(' ', $arr1 );
    echo EOL;
    echo EOL;
    $bs->sortNotEfficient($arr2);
    echo implode(' ', $arr2 );
    echo EOL;

} catch(Exception $e) {
    echo $e->getMessage();
}


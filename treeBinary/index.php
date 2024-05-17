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

$final = new BinaryNode("Final");

$semifinal1 = new BinaryNode("Semi Final 1");
$semifinal2 = new BinaryNode("Semi Final 2");

$quaterFinal1 = new BinaryNode("Quater Final 1");
$quaterFinal2 = new BinaryNode("Quater Final 2");
$quaterFinal3 = new BinaryNode("Quater Final 3");
$quaterFinal4 = new BinaryNode("Quater Final 4");

$final->addChildren($semifinal1, $semifinal2);
$semifinal1->addChildren($quaterFinal1, $quaterFinal2);
$semifinal2->addChildren($quaterFinal3, $quaterFinal4);

$tree = new BinaryTree($final);

$tree->traverse($final);
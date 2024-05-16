<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);

$surnameList = new LinkedList();
$surnameList->insert("johnson");
$surnameList->insert("williams");
$surnameList->insert("brown");
$surnameList->insert("smith");
$surnameList->display();

<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);

try {
    $lStack = new StackList();

    PHP_EOL;
    PHP_EOL;
    $aStack = new StackArray(5);
    // echo $aStack->top() . PHP_EOL;
    echo $aStack->isEmpty() . PHP_EOL;
    $aStack->push('a');
    $aStack->push('b');
    $aStack->push('c');
    echo $aStack->count() . PHP_EOL;
    echo $aStack->pop() . PHP_EOL;
    echo $aStack->pop() . PHP_EOL;
    echo $aStack->count() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}

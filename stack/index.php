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
    $stack = new StackArray(5);
    // echo $stack->top() . PHP_EOL;
    echo $stack->isEmpty() . PHP_EOL;
    $stack->push('a');
    $stack->push('b');
    $stack->push('c');
    echo $stack->count() . PHP_EOL;
    echo $stack->pop() . PHP_EOL;
    echo $stack->pop() . PHP_EOL;
    echo $stack->count() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}

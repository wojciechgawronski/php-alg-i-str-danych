<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../linkedList/I_LinkedList.php';
require_once '../linkedList/LinkedList.php';
require_once '../linkedList/ListNode.php';

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);


try {
    $list_Stack = new StackList();
    // echo $list_Stack->isEmpty();
    $list_Stack->push('one');
    $list_Stack->push('two');
    $list_Stack->push('three');
    // echo PHP_EOL;
    // if (!$list_Stack->isEmpty()) echo 'false';
    // echo PHP_EOL;
    echo $list_Stack->top();
    echo PHP_EOL;
    echo $list_Stack->pop();
    echo PHP_EOL;
    echo $list_Stack->top();
    // echo PHP_EOL;
    echo PHP_EOL;
    echo $list_Stack->pop();
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
    
    $aStack = new StackArray(5);
    echo $aStack->top() . PHP_EOL;
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
echo PHP_EOL;


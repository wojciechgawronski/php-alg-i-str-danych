<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);

$numberList = new DoublyLinkedList();
// $numberList->insertAtTail("one");
// $numberList->insertAtTail("two");
// $numberList->insertAtTail("three");
// $numberList->insertAtTail("four");

$numberList->insertAtHead("one");
$numberList->insertAtHead("two");
$numberList->insertAtHead("three");
$numberList->insertAtHead("four");

$numberList->insertAfter("xxx", "two");
// $numberList->insertAfter("xxx", "two");
// $numberList->insertAfter("xxx", "xxx");
// $numberList->insertAtTail("aaa");

// $numberList->deleteLast();

$numberList->displayForward();
echo PHP_EOL;
$numberList->displayBackward();
echo PHP_EOL;
echo PHP_EOL;

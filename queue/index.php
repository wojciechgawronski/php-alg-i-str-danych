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
    $pql = new PriorityQueueList();
    $pql->enqueue('one', 10);
    $pql->enqueue('two', 10);
    $pql->enqueue('one');
    $pql->enqueue('two');
    $pql->enqueue('one', 1);
    $pql->enqueue('two', 1);
    $pql->display();
    echo EOL;



    $q = new QueueArray();
    echo "peek: " . $q->peek() . PHP_EOL;
    echo $q->isEmpty();
    echo PHP_EOL;

    $q->enqueue('one');
    echo $q->isEmpty() ? 'true' : 'false' . PHP_EOL;
    echo "peek: " . $q->peek() . PHP_EOL;
    $q->enqueue('two');
    $q->enqueue('three');
    echo "peek: " . $q->peek() . PHP_EOL;

    echo $q->dequeue() . PHP_EOL;
    echo $q->dequeue() . PHP_EOL;
    echo $q->dequeue() . PHP_EOL;
    echo $q->dequeue() . PHP_EOL;
} catch (Exception $e) {
    $e->getMessage();
}

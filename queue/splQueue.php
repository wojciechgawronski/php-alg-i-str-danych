<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', "<br>");
}


$namesQueue = new SplQueue();
$namesQueue->push("one");
$namesQueue->push("two");
$namesQueue->push("three");

echo "Queue:\n";
foreach ($namesQueue as $element) {
    echo $element . EOL;
}
echo EOL;
echo 'count: ' . $namesQueue->count() . EOL;
echo 'front element (bottom): ' . $namesQueue->bottom() . EOL;
echo 'top: ' . $namesQueue->top() . EOL;
echo 'dequeue: ' . $namesQueue->dequeue() . EOL;

echo EOL;
// Emptying the queue
while (!$namesQueue->isEmpty()) {
    echo "Dequeued: " . $namesQueue->dequeue() . EOL;
}
echo 'count: ' . $namesQueue->count() . EOL;
echo EOL;
$namesQueue->dequeue();

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

function dd(...$vars)
{
    $backtrace = debug_backtrace();
    $caller = $backtrace[0];
    $isCli = php_sapi_name() === 'cli';
    if ($isCli) {
           // CLI format
           echo 'Called in: ' . basename($caller['file']) . ' on line: ' . $caller['line'] . "\n\n";
           foreach ($vars as $var) {
               var_dump($var);
           }
    } else {
        echo '<pre>';
        echo 'Called in ' . basename($caller['file']) . ' on line ' . $caller['line'] . "\n\n";
        foreach ($vars as $var) {
            var_dump($var);
        }
        echo '</pre>';
    }
    die;
}

$tree = new BSTree(10);
$tree->insert(12);
$tree->insert(6);
$tree->insert(3);
$tree->insert(8);
$tree->insert(15);
$tree->insert(13);
$tree->insert(36);
$tree->remove(15);
echo 'traverse: '. EOL;
echo $tree->traverse($tree->root);
echo EOL;
$search = 36;
echo $tree->search($search) ? "znaleziono $search" : "nieznaleziono $search";
echo EOL;
$search = 37;
echo $tree->search($search) ? "znaleziono $search" : "nieznaleziono $search";
echo EOL;
echo 'min tree: '. $tree->min();
echo EOL;
echo 'max tree: '. $tree->max();
echo EOL;
<?php

use PHPUnit\Framework\TestCase;
require_once 'selectionSort/SelectionSort.php';

if (!defined('EOL')) {
    if (php_sapi_name() === 'cli') {
        define('EOL', PHP_EOL);
    } else {
        define('EOL', "<br>");
    }
}

class SelectionSortTest extends TestCase
{
    public function testSort()
    {
        $ss = new SelectionSort();
        $arr =  [20,45,93,67,10,97,52,88,33,92];
        $arr = $ss->sort($arr);
        $this->assertEquals($arr, [10, 20, 33, 45, 52, 67, 88, 92, 93, 97]);
    }
}
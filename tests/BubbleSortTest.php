<?php

use PHPUnit\Framework\TestCase;

require_once 'sortBubble/BubbleSort.php';

class BubbleSortTest extends TestCase
{
    public function testSort()
    {
        $bs = new BubbleSort();
        $arr =  [20, 45, 20, 93, 67,10,97,52,88,33, 92];
        $bs->sort($arr);
        $this->assertEquals($arr, [97, 93, 92, 88, 67, 52, 45, 33, 20, 20, 10]);
    }

    public function testSortNotEfficient()
    {
        $bs = new BubbleSort();
        $arr =  [1,4,5,3];
        $bs->sortNotEfficient($arr);
        $this->assertEquals($arr, [5,4,3,1]);
    }
}

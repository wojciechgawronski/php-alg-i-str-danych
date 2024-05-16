<?php

use PHPUnit\Framework\TestCase;

require_once 'linkedList/I_LinkedList.php';
require_once 'linkedList/LinkedList.php';
require_once 'linkedList/ListNode.php';

class LinkedListTest extends TestCase
{
    public function testInsert()
    {
        $list = new LinkedList;
        $list->insert("smith");
        $this->expectOutputString("smith ");
        $list->display();
    }
    
    public function testDisplay()
    {
        $list = new LinkedList;
        $list->insert("smith");
        $list->insert("black");
        $list->insert("williams");
        $this->expectOutputString("smith black williams ");
        $list->display();
    }
}
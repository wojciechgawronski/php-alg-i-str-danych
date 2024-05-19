<?php

use PHPUnit\Framework\TestCase;

include_once 'linkedList/I_LinkedList.php';
include_once 'linkedList/LinkedList.php';
include_once 'linkedList/ListNode.php';

class LinkedListTest extends TestCase
{
    public function testInsert()
    {
        $list = new LinkedList();
        $list->insert("smith");
        $this->expectOutputString("smith");
        $list->display();
    }

    public function testRemoveHead()
    {
        $list = new LinkedList();
        $list->insert("one");
        $list->insert("two");
        $list->insert("three");
        $this->assertEquals(3, $list->getSize());
        $this->assertEquals('one', $list->removeHead());
        $this->assertEquals(2, $list->getSize());
        $this->assertEquals('two', $list->removeHead());
    }

    public function testDisplay()
    {
        $list = new LinkedList();
        $list->insert("smith");
        $list->insert("black");
        $list->insert("williams");
        $this->expectOutputString("smith black williams");
        $list->display();
    }

    public function testGetSize()
    {
        $list = new LinkedList();
        $list->insert("one");
        $list->insert("two");
        $list->insert("three");
        $this->assertEquals(3, $list->getSize());
    }

    public function testTop()
    {
        $list = new LinkedList();
        $this->assertEquals(null, $list->top());
        $list->insert("one");
        $this->assertEquals('one', $list->top());
        $list->insert("two");
        $list->insert("three");
        $this->assertEquals('three', $list->top());
    }
}

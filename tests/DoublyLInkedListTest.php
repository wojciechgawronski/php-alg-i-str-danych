<?php

use PHPUnit\Framework\TestCase;

require_once 'doubly-linked-list/DoublyLinkedList_Interface.php';
require_once 'doubly-linked-list/DoublyListNode.php';
require_once 'doubly-linked-list/DoublyLinkedList.php';

class DoublyLInkedListTest extends TestCase
{
    public function testInsertAtHead()
    {
        $list = new DoublyLinkedList();
        $list->insertAtHead("one");
        $list->insertAtHead("two");
        $list->insertAtHead("three");
        $this->expectOutputString("three two one");
        $list->displayForward();
    }

    public function testInsertAtTail()
    {
        $list = new DoublyLinkedList();
        $list->insertAtHead("one");
        $list->insertAtHead("two");
        $list->insertAtHead("three");
        $list->insertAtTail("four");
        $list->insertAtTail("five");
        $this->expectOutputString("three two one four five");
        $list->displayForward();
    }

    public function testDisplayBackward()
    {
        $list = new DoublyLinkedList();
        $list->insertAtHead("smith");
        $list->insertAtHead("brown");
        $list->insertAtHead("wiliams");
        $this->expectOutputString("smith brown wiliams");
        $list->displayBackward();
    }

    public function testDisplayForward()
    {
        $list = new DoublyLinkedList();
        $list->insertAtHead("smith");
        $list->insertAtHead("brown");
        $list->insertAtHead("wiliams");
        $this->expectOutputString("wiliams brown smith");
        $list->displayForward();
    }

    public function testInsertAfter()
    {
        $list = new DoublyLinkedList();
        $list->insertAtHead("one");
        $list->insertAfter('one', 'two'); // no add
        $this->assertEquals(1, $list->getTotalNodes());
        $list->insertAfter('two', 'one');
        $this->expectOutputString("one two");
        $list->displayForward();
        $list->insertAfter('three', 'two');
        $this->assertEquals(3, $list->getTotalNodes());
        $this->expectOutputString("one two three");
        $list->displayForward();
    }

    public function testDeleteFirst()
    {
        $list = new DoublyLinkedList();
        $list->deleteFirst();
        $this->expectOutputString("");
        $list->displayForward();
        $this->assertEquals(0, $list->getTotalNodes());

        $list->insertAtHead("smith");
        $list->deleteFirst();
        $this->expectOutputString("");
        $list->displayForward();
        $this->assertEquals(0, $list->getTotalNodes());
        
        $list->insertAtHead("brown");
        $list->insertAtHead("wiliams");
        $list->deleteFirst();
        $this->assertEquals(1, $list->getTotalNodes());
        $this->expectOutputString("brown");
        $list->displayForward();
    }
    
    public function testDeleteLast()
    {
        $list = new DoublyLinkedList();
        $list->deleteLast();
        $this->expectOutputString("");
        $list->displayForward();
        $this->assertEquals(0, $list->getTotalNodes());
        
        $list->insertAtHead("brown");
        $list->insertAtHead("wiliams");
        $list->deleteLast();
        $this->expectOutputString("wiliams");
        $list->displayForward();
        $this->assertEquals(1, $list->getTotalNodes());
    }

    public function testGetTotalNodes()
    {
        $list = new DoublyLinkedList();
        $this->assertEquals(0, $list->getTotalNodes());
        $list->insertAtHead("wiliams");
        $list->insertAtHead("wiliams");
        $list->insertAtHead("wiliams");
        $this->assertEquals(3, $list->getTotalNodes());
        
        $list->deleteLast();
        $this->assertEquals(2, $list->getTotalNodes());

    }
}
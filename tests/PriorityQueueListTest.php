<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'queue/PriorityQueueInterface.php';
require_once 'queue/PriorityQueueList.php';
require_once 'queue/PriorityListNode.php';

class PriorityQueueListTest extends TestCase
{
    public function testEnqueue()
    {
        $q = new PriorityQueueList(3);
        $q->enqueue('one');
        $q->enqueue('two');
        $this->assertEquals(2, $q->getSize());
        $this->assertEquals('one', $q->peek());
        $q->enqueue('two', 1);
        $this->assertEquals('two', $q->peek());
    }

    public function testDequeue()
    {
        $q = new PriorityQueueList();
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');
        $q->dequeue();
        $q->enqueue('one');
        $q->enqueue('two');
        $this->assertEquals('one', $q->peek());
        $this->assertEquals('one', $q->dequeue());
        $this->assertEquals('two', $q->dequeue());
        $q->enqueue('two', 1);
        $this->assertEquals('two', $q->dequeue());
    }

    public function testPeek()
    {
        $q = new PriorityQueueList();
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');
        $q->peek();
        $q->enqueue(2, 10);
        $this->assertEquals(2, $q->peek());
        $q->enqueue(1, 11);
        $q->enqueue(3);
        $this->assertEquals(1, $q->peek());
    }

    public function testIsEmpty()
    {
        $q = new PriorityQueueList();
        $this->assertEquals(true, $q->isEmpty());
        $q->enqueue('asdf');
        $this->assertEquals(false, $q->isEmpty());
        $q->enqueue(1234);
        $q->enqueue(1234);
        $q->dequeue();
        $q->dequeue();
        $q->dequeue();
        $this->assertEquals(true, $q->isEmpty());
    }

    public function testGetSize()
    {
        $q = new PriorityQueueList();
        $this->assertEquals(0, $q->getSize());
        $q->enqueue(1);
        $q->enqueue(1);
        $this->assertEquals(2, $q->getSize());
        $q->dequeue();
        $this->assertEquals(1, $q->getSize());
    }
}

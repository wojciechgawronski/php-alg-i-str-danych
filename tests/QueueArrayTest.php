<?php

use PHPUnit\Framework\TestCase;

include_once 'queue/QueueInterface.php';
include_once 'queue/QueueArray.php';

class QueueArrayTest extends TestCase
{
    public function testEnqueue()
    {
        $q = new QueueArray(2);
        $this->assertEquals(0, $q->getSize());
        $q->enqueue('one');
        $this->assertEquals(1, $q->getSize());
        $q->enqueue('two');
        $this->expectException(OverflowException::class);
        $this->expectExceptionMessage('The queue is full');
        $q->enqueue('three');
        $this->assertEquals(2, $q->getSize());
        $q->dequeue();
        $this->assertEquals(1, $q->getSize());
    }

    public function testDequeue()
    {
        $q = new QueueArray();
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');
        $q->dequeue();
        $q->enqueue('one');
        $this->assertEquals('one', $q->dequeue());
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');
        $q->dequeue();
        $this->assertEquals(0, $q->getSize());
    }

    public function testPeek()
    {
        $q = new QueueArray();
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');
        $q->peek();
        $q->enqueue('one');
        $q->enqueue('one');
        $q->peek();
        $this->assertEquals(2, $q->getSize());
    }

    public function testGetSize()
    {
        $q = new QueueArray();
        $this->assertEquals(0, $q->getSize());
        $q->enqueue('one');
        $this->assertEquals(1, $q->getSize());
        $q->enqueue('one');
        $q->enqueue('one');
        $this->assertEquals(3, $q->getSize());
        $q->dequeue();
        $this->assertEquals(2, $q->getSize());
    }

    public function testIsEmpty()
    {
        $q = new QueueArray();
        $this->assertEquals(true, $q->isEmpty());
        $q->enqueue('one');
        $this->assertEquals(false, $q->isEmpty());
    }
}

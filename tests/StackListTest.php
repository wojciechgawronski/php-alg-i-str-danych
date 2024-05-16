<?php

use PHPUnit\Framework\TestCase;

require_once 'stack/StackInterface.php';
require_once 'stack/StackArray.php';
require_once 'stack/StackList.php';
include_once 'linkedList/I_LinkedList.php';
include_once 'linkedList/ListNode.php';
include_once 'linkedList/LinkedList.php';

class StackListTest extends TestCase
{
    public function testCount()
    {
        $stack = new StackList();
        $stack->push('a');
        $stack->push('b');
        $stack->push('c');
        $this->assertEquals(3, $stack->count());
        $stack->pop();
        $this->assertEquals(2, $stack->count());
    }

    public function testPush()
    {
        $stack = new StackList(3);
        $stack->push('a');
        $stack->push('b');
        $stack->push('c');
        $this->assertEquals(3, $stack->count());
        // $this->expectException(OverflowException::class);
        // $this->expectExceptionMessage('Stack overflow');
        $stack->push('d');
    }

    public function testPop()
    {
        $stack = new StackList();
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Cannot remove from an empty list');
        $stack->pop();
        $stack->pop();
        $stack->push('d');
        $stack->push('e');
        $this->assertEquals('e', $stack->pop());
        $this->assertEquals('d', $stack->pop());
        $this->assertEquals(0, $stack->count());
    }

    public function testTop()
    {
        $stack = new StackList();
        $stack->push('a');
        $stack->push('b');
        $stack->push('c');
        $this->assertEquals(3, $stack->count());
        $this->assertEquals('c', $stack->top());
        $stack->pop();
        $this->assertEquals('b', $stack->top());
        $this->assertEquals(2, $stack->count());
    }

    public function testIsEmpty()
    {
        $stack = new StackList();
        $this->assertEquals(true, $stack->isEmpty());
        $stack->push('e');
        $this->assertEquals(false, $stack->isEmpty());
        $stack->push('e');
        $stack->pop();
        $stack->pop();
        $this->assertEquals(true, $stack->isEmpty());
    }
}

<?php

use PHPUnit\Framework\TestCase;

require_once 'stack/StackInterface.php';
require_once 'stack/StackArray.php';

class StackListTest extends TestCase
{
    public function testCount()
    {
        $stack = new StackArray();
        // $stack->push('a');
        // $stack->push('b');
        // $stack->push('c');
        // $this->assertEquals(3, $stack->count());
        // $stack->pop();
        // $this->assertEquals(2, $stack->count());
    }

    public function testPush()
    {
        // $stack = new StackArray(3);
        // $stack->push('a');
        // $stack->push('b');
        // $stack->push('c');
        // $this->assertEquals(3, $stack->count());
        // $this->expectException(OverflowException::class);
        // $this->expectExceptionMessage('Stack overflow');
        // $stack->push('d');
    }

    public function testPop()
    {
        // $stack = new StackArray(3);
        // $this->expectException(UnderflowException::class);
        // $this->expectExceptionMessage('Cannot pop from an empty stack');
        // $stack->pop('d');
        // $stack->push('d');
        // $stack->push('e');
        // $this->assertEquals('e', $stack->pop());
        // $this->assertEquals('d', $stack->pop());
        // $this->assertEquals(0, $stack->count());
    }

    public function testTop()
    {
        // $stack = new StackArray(3);
        // $this->expectException(UnderflowException::class);
        // $this->expectExceptionMessage('Stack is empty');
        // $stack->top();
        // $stack->push('d');
        // $stack->push('e');
        // $this->assertEquals('e', $stack->top());
        // $this->assertEquals(2, $stack->count());
    }

    public function testIsEmpty()
    {
        // $stack = new StackArray(3);
        // $this->assertEquals(true, $stack->isEmpty());
        // $stack->push('e');
        // $this->assertEquals(false, $stack->isEmpty());
    }
}
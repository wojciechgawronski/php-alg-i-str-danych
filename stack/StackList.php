<?php

use LinkedList;

class StackList implements StackInterface
{
    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function push(string $item): void
    {

    }

    public function pop(): string
    {
        
    }

    public function top(): string
    {

    }

    public function isEmpty(): bool
    {

    }

    public function count(): int
    {
        
    }

}
<?php

/**
 *  The stack implementation by an array
 */
class StackArray implements StackInterface
{
    private int $limit;
    private array $stack = [];

    public function __construct(int $limit = 20)
    {
        $this->limit = $limit;
    }

    public function push(string $item): void
    {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
        } else {
            throw new OverflowException("Stack overflow");
        }
    }

    public function pop(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException('Cannot pop from an empty stack');
        }
        return array_pop($this->stack);
    }

    public function top(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        }
        return end($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function count(): int
    {
        return count($this->stack);
    }
}

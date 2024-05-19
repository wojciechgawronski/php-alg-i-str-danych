<?php
if (is_file('../linkedList/I_LinkedList.php'))
    include_once '../linkedList/I_LinkedList.php';

if (is_file('../linkedList/LinkedList.php'))
    include_once '../linkedList/LinkedList.php';

class StackList implements StackInterface
{
    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function push(string $item): void
    {
        $this->stack->insert($item);
    }

    public function pop(): string
    {
        return $this->stack->removeTail();
    }

    public function top(): ?string
    {
        return $this->stack->top();
    }

    public function isEmpty(): bool
    {
        return $this->stack->getSize() === 0;
    }

    public function count(): int
    {
        return $this->stack->getSize();
    }
}

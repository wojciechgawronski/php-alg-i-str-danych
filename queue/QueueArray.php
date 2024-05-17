<?php

class QueueArray implements QueueInterface
{
    private int $limit;
    private array $queue = [];

    public function __construct(int $limit = 20)
    {
        $this->limit = $limit;
    }

    public function enqueue(string $item): void
    {
        if (count($this->queue) >= $this->limit) {
            throw new OverflowException("The queue is full");
        }
        array_push($this->queue, $item);
    }

    public function dequeue(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty");
        }
        return array_pop($this->queue);
    }

    /**
     * see the head of the queue
     */
    public function peek(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty");
        }
        return current($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    public function getSize(): int
    {
        return count($this->queue);
    }

}
<?php

declare(strict_types=1);

interface PriorityQueueInterface
{
    public function enqueue($item, int $priority = 0): void;

    public function dequeue(): mixed;

    public function peek(): mixed;

    public function isEmpty(): bool;

    public function getSize(): int;
}

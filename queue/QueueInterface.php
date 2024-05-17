<?php

interface QueueInterface
{
    public function enqueue(string $item): void;

    public function dequeue(): string;

    public function peek(): string;

    public function isEmpty(): bool;

    public function getSize(): int;
}

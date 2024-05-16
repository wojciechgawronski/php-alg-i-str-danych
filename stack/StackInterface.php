<?php

interface StackInterface
{
    public function push(string $item): void;

    public function pop(): string;

    public function top(): string;

    public function isEmpty(): bool;

    public function count(): int;
}
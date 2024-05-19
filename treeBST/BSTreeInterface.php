<?php

interface BSTreeInterface
{
    public function insert(int|float $data): BSTNode;

    public function remove(int|float $value): void;

    public function search(int|float $value): ?BSTNode;

    public function traverse(BSTNode $node);

    public function max(): int|float|null;

    public function min(): int|float|null;

    public function isEmpty(): bool;
}

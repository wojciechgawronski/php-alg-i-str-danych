<?php

interface BSTreeInterface
{
    public function insert(int|float $value): void;

    public function delete(int|float $value): void;

    public function search(int|float $value): null|int|float;

    public function inOrderTraversal();

    public function findMax(): int|float|null;

    public function findMin(): int|float|null;

    public function isEmpty(): bool;
}

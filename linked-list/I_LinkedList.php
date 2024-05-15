<?php

declare(strict_types=1);

interface I_LinkedList
{
    public function insert(string $data);

    public function display(): void;
}

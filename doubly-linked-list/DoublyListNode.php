<?php
declare(strict_types=1);

class DoublyListNode
{
    public string|null $data = null;
    public $next = null;
    public $prev = null;

    public function __construct(string $data)
    {
        $this->data = $data;
    }
}

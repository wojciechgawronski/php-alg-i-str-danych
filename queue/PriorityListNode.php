<?php

declare(strict_types=1);

class PriorityListNode
{
    public $data = null;
    public $next = null;
    public int $priority;

    public function __construct($data, int $priority = 0)
    {
        $this->data = $data;
        $this->priority = $priority;
    }
}

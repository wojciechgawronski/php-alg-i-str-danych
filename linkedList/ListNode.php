<?php

declare(strict_types=1);

/**
 * Node for sto do przechowywania nazwisk
 */
class ListNode
{
    public $data = null;
    public $next = null;

    public function __construct(string $data)
    {
        $this->data = $data;
    }
}

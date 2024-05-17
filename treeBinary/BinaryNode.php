<?php

class BinaryNode
{
    public mixed $data;
    public $left = null;
    public $right = null;

    public function __construct(mixed $data)
    {
        $this->data = $data;
    }

    public function addChildren(BinaryNode $left, BinaryNode $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}

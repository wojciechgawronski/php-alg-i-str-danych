<?php

class TreeNode
{
    public mixed $data = null;
    public array $children = [];

    public function __construct(mixed $data)
    {
        $this->data = $data;
    }

    public function addChildren(TreeNode $node)
    {
        $this->children[] = $node;
    }
}

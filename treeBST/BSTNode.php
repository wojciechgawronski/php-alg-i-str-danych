<?php

declare(strict_types=1);

class BSTNode
{
    public int $data;
    public $left = null;
    public $right = null;

    public function __construct(int $data)
    {
        $this->data = $data;
    }

    public function min()
    {
        $node = $this;
        while ($node->left) {
            $node = $node->left;
        }
        return $node;
    }

    public function max(): int
    {
        $node = $this;
        while ($node->right) {
            $node = $node->right;
        }
        return $node;
    }

    // następca
    public function successor()
    {
        $node = $this;
        if ($node->right) {
            return $node->right->min();
        } else {
            return null;
        } 
    }

    public function predecessor()
    {
        $node = $this;
        if ($node->left) {
            return $node->left->max();
        } else {
            return null;
        }
    }
}

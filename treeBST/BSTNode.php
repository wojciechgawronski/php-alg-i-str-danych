<?php

declare(strict_types=1);

class BSTNode
{
    public int $data;
    public $left = null;
    public $right = null;
    public $parent;

    public function __construct(int $data, BSTNode $parent = null)
    {
        $this->data = $data;
        $this->parent = $parent;
    }

    public function delete(): void
    {
        $node = $this;
        if (!$node->left && !$node->right) {
            if ($node->parent->left === $node){
                if ($node->parent->left) {
                    $node->parent->left = null;
                }
            }
            else {
                if ($node->parent->right) {
                    $node->parent->right = null;
                }
            }
        } else if ($node->left && $node->right)
        {
            $successor = $node->successor();
            $node->data = $successor->data;
            $successor->delete();
        }
        else if ($node->left) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->left;
                $node->left->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->left;
                $node->left->parent = $node->parent->right;
            }
            $node->left = null;
        }
        elseif ($node->right)
        {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->right;
                $node->right->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }
            $node->right = null;
        }
    }

    public function min()
    {
        $node = $this;
        while ($node->left) {
            $node = $node->left;
        }
        return $node;
    }

    // public function max(): int
    // {
    //     $node = $this;
    //     while ($node->right) {
    //         $node = $node->right;
    //     }
    //     return $node;
    // }

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

    // public function predecessor()
    // {
    //     $node = $this;
    //     if ($node->left) {
    //         return $node->left->max();
    //     } else {
    //         return null;
    //     }
    // }
}

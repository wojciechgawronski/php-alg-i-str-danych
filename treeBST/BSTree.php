<?php

declare(strict_types=1);

class BSTree implements BSTreeInterface
{
    public $root = null;

    public function __construct(int $data)
    {
        $this->root = new BSTNode($data);        
    }

    public function isEmpty(): bool
    {
       return $this->root === null;
    }

    public function insert(int|float $data): BSTNode {
        if ($this->isEmpty()) {
            $this->root = new BSTNode($data);
            return $this->root;
        }

        $currNode = $this->root;
        while ($currNode) {
            if ($data > $currNode->data) {
                if ($currNode->right) {
                    $currNode = $currNode->right;
                } else {
                    $currNode->right = new BSTNode($data);
                    $currNode->right->parent = $currNode;
                    return $currNode->right;
                }
            } else if ($data < $currNode->data) {
                if ($currNode->left) {
                    $currNode = $currNode->left;
                } else {
                    $currNode->left = new BSTNode($data);
                    $currNode->left->parent = $currNode;
                    return $currNode->left;
                }
            } else {
                // Data already exists in the tree, return the existing node
                return $currNode;
            }
        }

        // This line should never be reached
        return $currNode;
    }

    public function traverse(BSTNode $node): string
    {
        if ($node === null) {
            $node = $this->root;
        }

        $result = [];
        $this->inOrderTraversal($node, $result);

        return implode(' ', $result);
    }


    private function inOrderTraversal(?BSTNode $node, array &$result): void
    {
        if ($node !== null) {
            $this->inOrderTraversal($node->left, $result);
            $result[] = $node->data;
            $this->inOrderTraversal($node->right, $result);
        }
    }

    public function remove(int|float $data): void
    {
        $node = $this->search($data);
        if ($node) 
            $node->delete();
    }

    public function min(): int|float|null
    {
        if ($this->isEmpty()) {
            return null; // or throw an exception
        }

        $currentNode = $this->root;
        $operations = 1;

        while ($currentNode->left !== null) {
            $currentNode = $currentNode->left;
            $operations++;
        }
        // echo "min(): operations: $operations".EOL;

        return $currentNode->data;
    }

    public function max(): int|float|null
    {
        if ($this->isEmpty()) {
            return null; // or throw an exception
        }

        $currentNode = $this->root;
        $operations = 1;
        while ($currentNode->right !== null) {
            $currentNode = $currentNode->right;
        }
        // echo "max(): operations: $operations".EOL;
        return $currentNode->data;
    }

    public function search(int|float $data): ?BSTNode
    {
        if ($this->isEmpty())
            return null;

        $node = $this->root;
        while ($node) {
            if ($data > $node->data) 
                $node = $node->right;
            else if ($data < $node->data)
                $node = $node->left;
            else 
                break;
        }

        return $node;
    }
}

<?php

declare(strict_types=1);

class BSTree // implements BSTTreeInterface
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

    public function insert(int $data): BSTNode {
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
        // return $currNode;
    }

    public function traverse(BSTNode $node): void
    {
        if ($node) {
            if ($node->left) {
                $this->traverse($node->left);
            }
            echo $node->data. " ";
            if ($node->right) {
                $this->traverse($node->right);
            }
        }
    }

    public function remove(int $data)
    {
        $node = $this->search($data);
        if ($node) 
            $node->delete();
    }

    public function min(): ?int
    {
        if ($this->isEmpty()) {
            return null; // or throw an exception
        }

        $currentNode = $this->root;
        $operations = 0;

        while ($currentNode->left !== null) {
            $currentNode = $currentNode->left;
            $operations++;
        }
        echo "min(): operations: $operations".EOL;

        return $currentNode->data;
    }

    public function max(): ?int
    {
        if ($this->isEmpty()) {
            return null; // or throw an exception
        }

        $currentNode = $this->root;
        $operations = 0;
        while ($currentNode->right !== null) {
            $currentNode = $currentNode->right;
        }
        echo "max(): operations: $operations".EOL;
        return $currentNode->data;
    }

    public function search(int $data): ?BSTNode
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

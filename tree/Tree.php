<?php

class Tree
{
    public $root = null;

    public function __construct(TreeNode $node)
    {
        $this->root = $node;
    }

    public function traverse(TreeNode $node, int $level = 0)
    {
        if ($node) {
            echo str_repeat("--", $level);
            echo $node->data . EOL;
            foreach ($node->children as $childNode) {
                $this->traverse($childNode, $level + 1);
            }
        } else {
            echo "Empty tree!";
        }
    }
}

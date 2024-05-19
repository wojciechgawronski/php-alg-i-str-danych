<?php

use PHPUnit\Framework\TestCase;

require_once 'treeBST/BSTreeInterface.php';
require_once 'treeBST/BSTNode.php';
require_once 'treeBST/BSTree.php';

// ! do testów - w klasie jest zdefiniowana EOL
if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', "<br>");
}

class BSTreeTest extends TestCase
{
    public function testInsert(){
        $tree = new BSTree(2);
        $tree->insert(12);
        $this->assertEquals(false, $tree->isEmpty());
        $this->assertEquals('2 12', $tree->traverse($tree->root));
    }

    public function testRemove(){
        $tree = new BSTree(10);
        $tree->insert(12);
        $tree->insert(6);
        $tree->insert(3);
        $this->assertEquals('3 6 10 12', $tree->traverse($tree->root));
        $tree->remove(3);
        $this->assertEquals('6 10 12', $tree->traverse($tree->root));
        $tree->remove(12);
        $this->assertEquals('6 10', $tree->traverse($tree->root));
    }

    public function testSearch() {
        $tree = new BSTree(10);
        $this->assertEquals(null, $tree->search(11));
        $tree->insert(12);
        $tree->insert(6);
        $tree->insert(3);
        $search = $tree->search(6);
        $this->assertEquals(6, $search->data);
    }

    public function testTraverse() {
        $tree = new BSTree(10);
        $tree->insert(12);
        $tree->insert(6);
        $tree->insert(3);
        $tree->insert(8);
        $tree->insert(15);
        $tree->insert(13);
        $tree->insert(36);
        $tree->remove(15);
        $this->assertEquals('3 6 8 10 12 13 36', $tree->traverse($tree->root));
    }

    public function testMax() {
        $tree = new BSTree(10);
        $this->assertEquals(10, $tree->max());
        $tree->insert(12);
        $tree->insert(6);
        $tree->insert(3);
        $tree->insert(8);
        $tree->insert(15);
        $tree->insert(13);
        $this->assertEquals(15, $tree->max());
        $tree->insert(36);
        $tree->remove(15);
        $this->assertEquals(36, $tree->max());
    }

    public function testMin() {
        $tree = new BSTree(10);
        $this->assertEquals(10, $tree->min());
        $tree->insert(12);
        $tree->insert(6);
        $tree->insert(3);
        $tree->insert(8);
        $tree->insert(15);
        $tree->insert(13);
        $this->assertEquals(3, $tree->min());
    }

    public function testIsEmpty() {
        $tree = new BSTree(2);
        $this->assertEquals(false, $tree->isEmpty());
        $tree->remove(2);
        $this->assertEquals(false, $tree->isEmpty());
        $tree->insert(12);
        $this->assertEquals(false, $tree->isEmpty());
        $tree->insert(12);
        $this->assertEquals(false, $tree->isEmpty());
    }
}
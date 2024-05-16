<?php

declare(strict_types=1);

class LinkedList implements I_LinkedList
{
    private $head = null;
    private int $totalNodes = 0;

    public function insert(string $data)
    {
        $newNode = new DoublyListNode($data);
        if ($this->head == null) {
            $this->head = &$newNode;
        } else {
            $currNode = $this->head;
            while ($currNode->next != null) {
                $currNode = $currNode->next;
            }
            $currNode->next = $newNode;
        }
        $this->totalNodes++;
    }

    public function display(): void
    {
        // echo "total Nodes: ". $this->totalNodes . PHP_EOL;
        $currNode = $this->head;
        while ($currNode != null) {
            // echo "<li>".$currNode->data."</li>";
            echo "$currNode->data ";
            $currNode = $currNode->next;
        }
    }
}

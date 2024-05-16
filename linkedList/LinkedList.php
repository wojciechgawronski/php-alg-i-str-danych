<?php

declare(strict_types=1);

class LinkedList implements I_LinkedList
{
    private $head = null;
    private int $totalNodes = 0;

    public function insert(string $data)
    {
        $newNode = new ListNode($data);
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

    public function removeHead(): string
    {
        if ($this->head === null) {
            throw new UnderflowException("Cannot remove from an empty list");
        }
        $this->totalNodes--;
        $data = $this->head->data;
        $this->head = $this->head->next;

        return $data;
    }

    public function removeTail(): string
    {
        if ($this->head === null) {
            throw new UnderflowException("Cannot remove from an empty list");
        }

        $data = "";
        if ($this->head->next == null) {
            $data = $this->head->data;
            $this->head = null;
        } else {
            $currNode = $this->head;
            while ($currNode->next->next !== null) {
                $data = $currNode->next->data;
                $currNode = $currNode->next;
            }
            $currNode->next = null;
        }
        $this->totalNodes--;
        return $data;
    }

    public function display(): void
    {
        $currNode = $this->head;
        $strList = "";
        while ($currNode != null) {
            $strList .= $currNode->data." ";
            $currNode = $currNode->next;
        }
        echo trim($strList);
    }

    public function getSize(): int
    {
        return $this->totalNodes;
    }

    public function top(): null|string
    {
        if ($this->head == null) {
            return null;
        }
        $currNode = $this->head;
        while ($currNode->next != null) {
            $currNode = $currNode->next;
        }

        return $currNode->data;

    }
}

<?php

declare(strict_types=1);

class DoublyLinkedList implements DoublyLinkedList_Interface
{
    private DoublyListNode|null $firstNode = null;
    private DoublyListNode|null $lastNode = null;
    private int $totalNode = 0;

    public function insertAtHead(string $data): void
    {
        $newNode = new DoublyListNode($data);
        if ($this->firstNode == null) {
            $this->firstNode = &$newNode;
            $this->lastNode = $newNode;
        } else {
            $currentFirstNode = $this->firstNode;
            $this->firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
            $currentFirstNode->prev = $newNode;
        }
        $this->totalNode++;
    }

    public function insertAtTail(string $data): void
    {
        $newNode = new DoublyListNode($data);
        if ($this->firstNode == null) {
            $this->firstNode = &$newNode;
            $this->lastNode = $newNode;
        } else {
            $currNode = $this->lastNode;
            $currNode->next = $newNode;
            $newNode->prev = $currNode;
            $this->lastNode = $newNode;
        }
        $this->totalNode++;
    }

    /**
     * insert after exact node
     */
    public function insertAfter(string $data, string $query): void
    {
        if ($this->firstNode) {
            $currNode = $this->firstNode;

            while ($currNode != null) {
                if ($currNode->data === $query) {
                    $newNode = new DoublyListNode($data);
                    $nextNode = $currNode->next;

                    if ($currNode == $this->lastNode) {
                        $this->insertAtTail($data);
                        break;
                    } else {
                        $newNode->prev = $currNode;
                        $newNode->next = $currNode->next;
                        $currNode->next = $newNode;
                        $nextNode->prev = $newNode;
                        $this->totalNode++;
                        break;
                    }
                }
                $currNode = $currNode->next;
            }
        }
    }

    public function deleteFirst(): void
    {
        if ($this->firstNode != null) {
            if ($this->firstNode->next != null) {
                $this->firstNode = $this->firstNode->next;
                $this->firstNode->prev = null;
            } else {
                $this->firstNode = null;
            }
            $this->totalNode--;
        }
    }

    public function delete(string $query)
    {
        if ($this->firstNode) {
            $currNode = $this->firstNode;
            while ($currNode != null) {
                if ($currNode->data == $query) {
                    if ($currNode->prev == null) {
                        $nextNode = $currNode->next;
                        $nextNode->prev = null;
                    }
                    else if ($currNode->next == null) {
                        $prevNode = $currNode->prev;
                        $prevNode->next = null;
                    } else {
                        $prevNode = $currNode->prev;
                        $prevNode->next = $currNode->next;
                        $next = $currNode->next;
                        $next->prev = $prevNode;
                    }
                    $this->totalNode--;
                    break;
                }
                $currNode = $currNode->next;
            }
        }
    }

    public function deleteLast(): void
    {
        if ($this->lastNode != null) {
            $currNode = $this->lastNode;
            if ($currNode->prev == null) {
                $this->firstNode = null;
                $this->lastNode = null;
            } else {
                $prevNode = $currNode->prev;
                $this->lastNode = $prevNode;
                $this->lastNode->next = null;
            }
            $this->totalNode--;
        }
    }

    /**
     * display list from start to end
     */
    public function displayForward(): void
    {
        $currNode = $this->firstNode;
        $stringList = "";
        while ($currNode != null) {
            $stringList .= $currNode->data . " ";
            $currNode = $currNode->next;
        }
        echo trim($stringList);
    }

    /**
     * display list from end to start
     */
    public function displayBackward(): void
    {
        $stringList = "";
        $currNode = $this->lastNode;
        while ($currNode != null) {
            $stringList .= $currNode->data . " ";
            $currNode = $currNode->prev;
        }
        echo trim($stringList);
    }

    public function getTotalNodes(): int
    {
        return $this->totalNode;
    }
}

<?php

declare(strict_types=1);

class PriorityQueueList implements PriorityQueueInterface
{
    private int $totalNode = 0;
    private $firstNode = null;

    public function enqueue($data, int $priority = 0): void
    {
        $newNode = new PriorityListNode($data, $priority);
        $this->totalNode++;
        // If the list is empty or the new node has higher priority than the first node
        if ($this->firstNode === null || $this->firstNode->priority < $priority) {
            $newNode->next = $this->firstNode;
            $this->firstNode = $newNode;
        } else {
            // Traverse the list to find the correct position for the new node
            $current = $this->firstNode;
            while ($current->next !== null && $current->next->priority >= $priority) {
                $current = $current->next;
            }
            $newNode->next = $current->next;
            $current->next = $newNode;
        }
    }

    public function dequeue(): mixed
    {
        if ($this->firstNode === null) {
            throw new UnderflowException("Queue is empty");
        }

        $topNode = $this->firstNode;
        $this->firstNode = $this->firstNode->next;
        $this->totalNode--;

        return $topNode->data;
    }

    public function display()
    {
        $currNode = $this->firstNode;
        while ($currNode !== null) {
            echo "P: $currNode->priority | " . $currNode->data . EOL ;
            $currNode = $currNode->next;
        }
    }

    public function isEmpty(): bool
    {
        return $this->totalNode == 0;
    }

    public function peek(): mixed
    {
        if ($this->firstNode === null) {
            throw new UnderflowException("Queue is empty");
        }
        return $this->firstNode->data;
    }

    public function getSize(): int
    {
        return $this->totalNode;
    }
}

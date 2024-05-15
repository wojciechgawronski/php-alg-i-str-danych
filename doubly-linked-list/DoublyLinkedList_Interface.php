<?php

declare(strict_types=1);

interface DoublyLinkedList_Interface
{
    public function insertAtHead(string $data): void;

    public function insertAtTail(string $data): void;

    public function insertAfter(string $data, string $query): void;

    public function deleteFirst():void;
    
    public function deleteLast():void;

    public function displayForward(): void;

    public function displayBackward(): void;

    public function getTotalNodes(): int;
}

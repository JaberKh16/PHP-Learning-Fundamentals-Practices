<?php

class Cart
{
    private array $items = [];

    public function addItem(string $item, int $quantity): void
    {
        if ($quantity <= 0) {
            throw new InvalidArgumentException(
                "Quantity must be greater than zero.",
            );
        }
        $this->items[$item] = ($this->items[$item] ?? 0) + $quantity;
    }

    public function removeItem(string $item): void
    {
        unset($this->items[$item]);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function clear(): void
    {
        $this->items = [];
    }
}

<?php declare(strict_types=1);

namespace Kata;

class ShoppingCart
{
    private $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function all(): array
    {
        return $this->items;
    }
}

<?php declare(strict_types=1);

namespace Kata;

class ShoppingCart
{
    const STANDARD_VAT_PERCENTAGE = 21;

    private $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function priceWithoutVat(): float
    {
        return array_sum($this->items);
    }

    public function priceWithVat(): float
    {
        $total = array_sum($this->items);

        return $total + $this->calculateVAT($total);
    }

    private function calculateVAT(float $value): float
    {
        $vat = (self::STANDARD_VAT_PERCENTAGE / 100) * $value;

        return (float)number_format($vat, 2);
    }
}

<?php declare(strict_types=1);

namespace KataTests;

use Kata\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    /** @test */
    public function it_can_add_items_and_list_them(): void
    {
        $result = [
            'Iceberg 🥬' => '1.85',
            'Tomatoe 🍅' => '0.60',
        ];
        $shoppingCart = new ShoppingCart($result);

        self::assertEquals($result, $shoppingCart->all());
    }

    /** @test */
    public function it_can_calculate_price_without_vat(): void
    {
        $expectedPrice = 2.45;

        $result = [
            'Iceberg 🥬' => '1.85',
            'Tomatoe 🍅' => '0.60',
        ];
        $shoppingCart = new ShoppingCart($result);

        self::assertEquals($expectedPrice, $shoppingCart->priceWithoutVat());
    }

    /** @test */
    public function should_view_total_price_for_all_items()
    {
        $expectedPrice = 2.96;

        $result = [
            'Iceberg 🥬' => '1.85',
            'Tomatoe 🍅' => '0.60',
        ];
        $shoppingCart = new ShoppingCart($result);

        self::assertEquals($expectedPrice, $shoppingCart->priceWithVat());
    }
}

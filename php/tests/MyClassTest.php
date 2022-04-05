<?php declare(strict_types=1);

namespace KataTests;

use Kata\ShoppingCart;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function should_able_to_add_items_and_list_them(): void
    {
        $result = [
            'Iceberg 🥬',
            'Tomatoe 🍅',
        ];
        $shoppingCart = new ShoppingCart($result);

        self::assertEquals($result, $shoppingCart->all());
    }

    /** @test */
    public function should_view_total_price_for_all_items(): void
    {
        $expectedPrice = 2.45;

        $result = [
            'Iceberg 🥬',
            'Tomatoe 🍅',
        ];
        $shoppingCart = new ShoppingCart($result);

        self::assertEquals($expectedPrice, $shoppingCart->priceWithoutVat());
    }
}

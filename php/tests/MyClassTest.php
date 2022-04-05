<?php declare(strict_types=1);

namespace KataTests;

use Kata\TheClass;
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
}

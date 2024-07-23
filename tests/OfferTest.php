<?php
namespace AcmeWidget;

use PHPUnit\Framework\TestCase;

class OfferTest extends TestCase {
    public function testOfferApplication() {
        $offer = new Offer('R01', 0.5);
        $products = [
            new Product('R01', 32.95),
            new Product('R01', 32.95),
        ];
        $discount = $offer->apply($products);
        $this->assertEquals(16.475, $discount);
    }
}

<?php
namespace AcmeWidget;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    public function testProductInitialization() {
        $product = new Product('R01', 32.95);
        $this->assertEquals('R01', $product->getCode());
        $this->assertEquals(32.95, $product->getPrice());
    }
}

<?php
// src/Offer.php

namespace AcmeWidget;

class Offer {
    private $productCode;
    private $discount;

    public function __construct(string $productCode, float $discount) {
        $this->productCode = $productCode;
        $this->discount = $discount;
    }

    public function apply(array $products): float {
        $discount = 0.0;
        $productCount = 0;

        foreach ($products as $product) {
            if ($product->getCode() === $this->productCode) {
                $productCount++;
                if ($productCount % 2 === 0) {
                    $discount += $product->getPrice() * $this->discount;
                }
            }
        }

        return $discount;
    }
}

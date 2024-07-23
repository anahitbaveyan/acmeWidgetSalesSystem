<?php
// src/Basket.php

namespace AcmeWidget;

class Basket {
    private $catalog;
    private $deliveryRules;
    private $offers;
    private $items = [];

    public function __construct(Catalog $catalog, array $deliveryRules, array $offers) {
        $this->catalog = $catalog;
        $this->deliveryRules = $deliveryRules;
        $this->offers = $offers;
    }

    public function add(string $productCode): void {
        $product = $this->catalog->getProduct($productCode);
        if ($product) {
            $this->items[] = $product;
        }
    }

    public function total(): float {
        $total = array_reduce($this->items, function($carry, $item) {
            return $carry + $item->getPrice();
        }, 0);

        foreach ($this->offers as $offer) {
            $total -= $offer->apply($this->items);
        }

        foreach ($this->deliveryRules as $rule) {
            if ($total < $rule->getThreshold()) {
                $total += $rule->getCost();
                break;
            }
        }

        return $total;
    }
}

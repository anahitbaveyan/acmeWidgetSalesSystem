<?php
// src/DeliveryRule.php

namespace AcmeWidget;

class DeliveryRule {
    private $threshold;
    private $cost;

    public function __construct(float $threshold, float $cost) {
        $this->threshold = $threshold;
        $this->cost = $cost;
    }

    public function getThreshold(): float {
        return $this->threshold;
    }

    public function getCost(): float {
        return $this->cost;
    }
}

<?php
namespace AcmeWidget;

use PHPUnit\Framework\TestCase;

class DeliveryRuleTest extends TestCase {
    public function testDeliveryRuleInitialization() {
        $rule = new DeliveryRule(50.0, 4.95);
        $this->assertEquals(50.0, $rule->getThreshold());
        $this->assertEquals(4.95, $rule->getCost());
    }
}

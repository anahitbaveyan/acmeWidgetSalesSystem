<? 
namespace AcmeWidget;

use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase {
    public function testBasketTotal() {
        $catalog = new Catalog();
        $catalog->addProduct(new Product('R01', 32.95));
        $catalog->addProduct(new Product('G01', 24.95));
        $catalog->addProduct(new Product('B01', 7.95));
        
        $deliveryRules = [
            new DeliveryRule(50.0, 4.95),
            new DeliveryRule(90.0, 2.95),
            new DeliveryRule(PHP_INT_MAX, 0.0)
        ];
        
        $offers = [
            new Offer('R01', 0.5)
        ];
        
        $basket = new Basket($catalog, $deliveryRules, $offers);
        $basket->add('R01');
        $basket->add('R01');
        $this->assertEquals(54.37, $basket->total());
    }
}

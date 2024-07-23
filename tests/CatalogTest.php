<?
namespace AcmeWidget;

use PHPUnit\Framework\TestCase;

class CatalogTest extends TestCase {
    public function testCatalogAddAndGetProduct() {
        $catalog = new Catalog();
        $product = new Product('R01', 32.95);
        $catalog->addProduct($product);
        $this->assertSame($product, $catalog->getProduct('R01'));
    }
}

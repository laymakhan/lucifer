
<?php
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($newPrice) {
        if ($newPrice > 0) {
            $this->price = $newPrice;
        }
    }
}

$product = new Product("Phone", 500);
echo "Product: " . $product->getName() . ", Price: $" . $product->getPrice() . "\n";

$product->setPrice(450);
echo "Updated Price: $" . $product->getPrice() . "\n";
?>
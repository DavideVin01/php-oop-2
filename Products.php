<?php
//E-COMMERCE HOME PAGE
class Product
{
    public $name;
    public $code;
    public $price;
    public $quantity;
    public $brand;
    public $description;
    public $animal;

    public function __construct($name, $code, $price, $quantity, $brand, $description, $animal)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->brand = $brand;
        $this->description = $description;
        $this->animal = $animal;
    }

    // NAME
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_numeric($name) && $name <= 0) return false;
        return $this->name = $name;
    }

    // CODE
    public function getCode()
    {
        return 'Codice ' . $this->code;
    }

    public function setCode($code)
    {
        if (!is_numeric($code) && $code <= 0) return false;
        return $this->code = $code;
    }

    // PRICE
    public function getPrice($valuta)
    {
        return $valuta . round($this->price, 2);
    }
    public function setPrice($price)
    {
        if (!is_numeric($price) && $price <= 0) return false;
        return $this->price = $price;
    }

    // QUANTITY
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        if (!is_numeric($quantity) && $quantity <= 0) return false;
        return $this->quantity = $quantity;
    }

    // BRAND
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        if (is_numeric($brand) && $brand <= 0) return false;
        return $this->brand = $brand;
    }

    // DESCRIPTION
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        if (is_numeric($description) && $description <= 0) return false;
        return $this->description = $description;
    }

    // ANIMAL
    public function getAnimal()
    {
        return $this->animal;
    }
    public function setAnimal($animal)
    {
        if (is_numeric($animal) && $animal <= 0) return false;
        return $this->animal = $animal;
    }
}

$product1 = new Product('Croccantini', '82912', 10, 1, 'Monge', 'Croccantini per cani di stazza grande', 'cane');

var_dump($product1);
echo $product1->getPrice('£');

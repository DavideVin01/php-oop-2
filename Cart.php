<?php
require_once __DIR__ . '/Products.php';

class Cart extends Product
{
    public $Products;

    public function getProducts($Products, $product1)
    {
        return $this->$Products = $product1;
    }

    public function setProducts($Products, $product1)
    {
        return $this->$Products = $product1;
    }

    // public function addToCart()
    // {

    // }
}

// var_dump($this->$Products);

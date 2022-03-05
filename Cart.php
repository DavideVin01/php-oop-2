<?php
class Cart
{
    public $Products;

    public function getProducts()
    {
        return $this->Products;
    }

    public function setProducts($Products)
    {
        $this->Products = $Products;

        return $this;
    }

    // public function addToCart()
    // {

    // }
}

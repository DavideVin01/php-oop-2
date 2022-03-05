<?php

class Toy
{
    public $color;
    public $material;
    public $height;
    public $width;
    public $weight;

    public function __construct($color, $material, $height, $width, $weight)
    {
        $this->setColor($color);
        $this->setMaterial($material);
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setWeight($weight);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    public function getHeight()
    {
        return $this->height . ' cm';
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth()
    {
        return $this->width . ' cm';
    }

    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight . 'g';
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}

$toy1 = new Toy('Brown', 'Rawhide', 5, 10, 10);

var_dump($toy1);

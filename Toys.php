<?php

class Toy
{
    public $toy_name;
    public $color;
    public $material;
    public $height;
    public $width;
    public $weight;

    public function __construct($toy_name, $color, $material, $height, $width, $weight)
    {
        $this->setToyName($toy_name);
        $this->setColor($color);
        $this->setMaterial($material);
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setWeight($weight);
    }

    public function getToyName()
    {
        return $this->toy_name;
    }

    public function setToyName($toy_name)
    {
        $this->toy_name = $toy_name;

        return $this;
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
        return $this->weight . 'gr';
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}

$toy1 = new Toy('Bone', 'Gray', 'Rawhide', 5, 10, 10);

var_dump($toy1);

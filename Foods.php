<?php

class Food
{
    public $ingredients;
    public $food_type;
    public $weight;

    public function __construct($ingredients, $food_type, $weight)
    {
        $this->setIngredients($ingredients);
        $this->setFoodType($food_type);
        $this->setWeight($weight);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        if (is_numeric($ingredients) && $ingredients <= 0) return false;
        return $this->ingredients = $ingredients;
    }

    public function getFoodType()
    {
        return $this->food_type;
    }

    public function setFoodType($food_type)
    {
        if (is_numeric($food_type) && $food_type <= 0) return false;
        return $this->food_type = $food_type;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (is_numeric($weight) && $weight <= 0) return false;
        return $this->weight = $weight;
    }
}

$food1 = new Food('Cereals, Vegetables, Fish', 'Croccantini', 200);

var_dump($food1);

<?php
class Customer
{
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }


    public function getFirst_name()
    {
        return $this->first_name;
    }

    public function setFirst_name($first_name)
    {
        if (!is_string($first_name) && strlen($first_name) <= 0) return false;
        return $this->first_name = $first_name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }

    public function setLast_name($last_name)
    {
        if (!is_string($last_name) && strlen($last_name) <= 0) return false;
        return $this->last_name = $last_name;
    }
}

$Customer1 = new Customer('Davide', 'Vinciguerra');

var_dump($Customer1);

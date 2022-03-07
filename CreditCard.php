<?php
class CreditCard
{
    public $number;
    public $bank;
    public $amount;
    public $expiration_date;

    public function __construct($number, $bank, $amount, $expiration_date)
    {
        $this->number = $number;
        $this->bank = $bank;
        $this->amount = $amount;
        $this->expiration_date = $expiration_date;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function getBank()
    {
        return $this->bank;
    }

    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getExpiration_date()
    {
        return $this->expiration_date;
    }
    public function setExpiration_date($expiration_date)
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }
}

$credit_card = new CreditCard('1928445645', 'Intesa S. Paolo', 600, '25-09-2024');

var_dump($credit_card);

<?php
class RegisteredUser
{
    public $email;
    public $password;
    public $addresses;
    public $credit_cards;
    public $orders; //Storico ordini

    public function __construct($email, $password, $addresses, $credit_cards, $orders)
    {
        $this->email = $email;
        $this->password = $password;
        $this->addresses = $addresses;
        $this->credit_cards = $credit_cards;
        $this->orders = $orders;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getAddresses()
    {
        return $this->addresses;
    }

    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    public function getCredit_cards()
    {
        return $this->credit_cards;
    }

    public function setCredit_cards($credit_cards)
    {
        $this->credit_cards = $credit_cards;

        return $this;
    }

    public function getOrders()
    {
        return $this->orders;
    }

    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }
}

$registered_user = new RegisteredUser('Utente@gmail.com', '*******', 'L. Castelli n. 21', 'Carta134', 'Ordini');

var_dump($registered_user);

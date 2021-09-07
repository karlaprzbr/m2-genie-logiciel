<?php

class BankAccount
{
    private $balance;

    public function __construct()
    {
        $this->balance = 0;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function add(int $amount)
    {
        $this->balance += $amount;
        return $this;
    }

    public function remove(int $amount)
    {
        $tmp_balance = $this->balance - $amount;
        if($tmp_balance < 0) {
            throw new Exception('Découvert non autorisé');
        } else {
            $this->balance -= $amount;
        }
        return $this;
    }

}
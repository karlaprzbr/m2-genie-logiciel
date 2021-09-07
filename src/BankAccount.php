<?php

class BankAccount
{
    private $balance;

    public function __construct(int $balance = 0)
    {
        $this->balance = $balance;
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
<?php

class BankAccount
{
    private $solde;

    public function __construct()
    {
        $this->solde = 0;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function crediter(int $montant)
    {
        $this->solde += $montant;
        return $this;
    }

    public function debiter(int $montant)
    {
        $this->solde -= $montant;
        return $this;
    }

}
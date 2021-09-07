<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BankAccountTest extends TestCase
{
    
    public function testNewAccount(): void
    {
        $account = new BankAccount();
        $this->assertSame(0, $account->getBalance());
    }

    public function testAdd(): void
    {
        $account = new BankAccount();
        $account->add(50);
        $this->assertSame(50, $account->getBalance());
    }
    
    public function testRemove(): void
    {
        $account = new BankAccount();
        $account->add(100);
        $account->remove(25);
        $this->assertSame(75, $account->getBalance());
    }

    public function testErreur()
    {
        $this->expectException(TypeError::class);
        $account = new BankAccount();
        $account->remove(2.5);   
    }

    public function testErreur2()
    {
        $this->expectExceptionMessage("Découvert non autorisé");
        $account = new BankAccount();
        $account->remove(50);   
    }
}
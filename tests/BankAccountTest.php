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
        $account = new BankAccount(100);
        $account->remove(25);
        $this->assertSame(75, $account->getBalance());
    }

    public function testAmountIsInt()
    {
        $this->expectException(TypeError::class);
        $account = new BankAccount(100);
        $account->remove(2.5);   
    }

    public function testOverdraftNotAllowed()
    {
        $this->expectExceptionMessage("Découvert non autorisé");
        $account = new BankAccount();
        $account->remove(50);   
    }

    public function testSendMoney()
    {
        $a1 = new BankAccount(50);
        $a2 = new BankAccount(20);
        $this->expectExceptionMessage("Découvert non autorisé");
        $a1->SendMoney(100, $a2);
        $this->assertSame(50, $a1->getBalance());
        $this->assertSame(20, $a2->getBalance());
    }
}
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BankAccountTest extends TestCase
{
    
    public function testCreaCompte(): void
    {
        $compte = new BankAccount();
        $this->assertSame(0, $compte->getSolde());
    }

    public function testCrediter(): void
    {
        $compte = new BankAccount();
        $compte->crediter(50);
        $this->assertSame(50, $compte->getSolde());
    }
    
    public function testDebiter(): void
    {
        $compte = new BankAccount();
        $compte->debiter(25);
        $this->assertSame(-25, $compte->getSolde());
        
    }

    public function testErreur()
    {
        $this->expectException(TypeError::class);
        $compte = new BankAccount();
        $compte->debiter(2.5);   
    }
}
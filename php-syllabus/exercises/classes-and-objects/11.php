<?php

class Account
{
    private $name;
    private $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdrawal($amount)
    {
        $this->balance -= $amount;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function __toString()
    {
        return "$this->name: $this->balance" . PHP_EOL;
    }
}

function transfer(Account $from, Account $to, $howMuch)
{
    $from->withdrawal($howMuch);
    $to->deposit($howMuch);
}

echo "Your first account" . PHP_EOL;
$bartos_account = new Account("Barto's account", 100.0);
$bartos_account->deposit(20.0);
echo $bartos_account;

echo "Your first money transfer" . PHP_EOL;
$matts_account = new Account("Matt's account", 1000);
$my_account = new Account("My account", 0);
$matts_account->withdrawal(100.0);
$my_account->deposit(100.0);
echo $matts_account;
echo $my_account;

echo "Money transfers" . PHP_EOL;
$accountA = new Account("A", 100.0);
$accountB = new Account("B", 0.0);
$accountC = new Account("C", 0.0);

transfer($accountA, $accountB, 50.0);
transfer($accountB, $accountC, 25.0);

echo $accountA;
echo $accountB;
echo $accountC;

<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {
        $formattedBalance = ($this->balance >= 0) ? '$' . number_format($this->balance, 2) : '-$' .
            number_format(abs($this->balance), 2);

        return $this->name . ', ' . $formattedBalance;
    }
}

$ben = new BankAccount("Benson", 17.25);
echo $ben->show_user_name_and_balance();
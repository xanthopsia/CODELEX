<?php
function calculatePay($basePay, $hoursWorked)
{
    $minWage = 8.00;
    $maxHours = 60;
    $overtimeRate = 1.5;

    if ($basePay < $minWage) {
        echo "Error: Base pay is less than the minimum wage ($minWage).\n";
        return;
    }

    if ($hoursWorked > $maxHours) {
        echo "Error: Employee worked more than $maxHours hours in a week.\n";
        return;
    }

    if ($hoursWorked <= 40) {
        $totalPay = $basePay * $hoursWorked;
    } else {
        $regularPay = $basePay * 40;
        $overtimeHours = $hoursWorked - 40;
        $overtimePay = $basePay * $overtimeHours * $overtimeRate;
        $totalPay = $regularPay + $overtimePay;
    }

    echo "Total pay: $" . number_format($totalPay, 2) . "\n";
}

function main()
{
    echo "Employee 1\n";
    calculatePay(7.50, 35);

    echo "Employee 2\n";
    calculatePay(8.20, 47);

    echo "Employee 3\n";
    calculatePay(10.00, 73);
}

main();


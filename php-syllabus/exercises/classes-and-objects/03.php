<?php

class FuelGauge
{
    const MAX_FUEL = 70;

    private int $fuel;

    public function __construct($fuel)
    {
        $this->fuel = $fuel;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function addFuel(): void
    {
        if ($this->fuel < self::MAX_FUEL) {
            $this->fuel++;
        }
    }

    public function decrementFuel(): void
    {
        if ($this->fuel > 0) {
            $this->fuel--;
        }
    }
}

class Odometer
{
    const MAX_MILEAGE = 999999;

    private int $mileage;
    private FuelGauge $fuelGauge;

    public function __construct(int $mileage, FuelGauge $fuelGauge)
    {
        $this->mileage = $mileage;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function incrementMileage(): void
    {
        $this->mileage++;

        if ($this->mileage > self::MAX_MILEAGE) {
            $this->mileage = 0;
        }

        if ($this->mileage % 10 === 0) {
            $this->fuelGauge->decrementFuel();
        }
    }
}

class Car
{
    private FuelGauge $fuelGauge;
    private Odometer $odometer;

    public function __construct(FuelGauge $fuelGauge, Odometer $odometer)
    {
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
    }

    public function refuel(): void
    {
        echo 'Refueling Vehicle...' . PHP_EOL;

        while ($this->fuelGauge->getFuel() < FuelGauge::MAX_FUEL) {
            usleep(5 * 100000);
            $this->fuelGauge->addFuel();
            echo "Fuel: {$this->fuelGauge->getFuel()}l" . PHP_EOL;
        }

        echo 'Refueling done. Let\'s go for a ride!' . PHP_EOL;
    }

    public function drive(): void
    {
        while ($this->fuelGauge->getFuel() > 0) {
            usleep(2 * 100000);
            $this->odometer->incrementMileage();
            echo "Mileage: {$this->odometer->getMileage()}km" . PHP_EOL;
            echo "Fuel: {$this->fuelGauge->getFuel()}l" . PHP_EOL;
        }

        echo 'The car ran out of fuel.';
    }
}

$initialFuel = rand(55, 65);
$initialMileage = rand(100000, 900000);

$fuelGauge = new FuelGauge($initialFuel);
$odometer = new Odometer($initialMileage, $fuelGauge);
$car = new Car($fuelGauge, $odometer);

$car->refuel();
$car->drive();

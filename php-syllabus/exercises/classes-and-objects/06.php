<?php

class EnergyDrinkSurvey
{
    const PEOPLE_SURVEYED = 12467;
    const PURCHASED_ENERGY_DRINKS = 0.14;
    const PREFER_CITRUS_DRINKS = 0.64;

    public static function calculate_energy_drinkers(): int
    {
        return round(self::PEOPLE_SURVEYED * self::PURCHASED_ENERGY_DRINKS);
    }

    public static function calculate_prefer_citrus(): int
    {
        return round(self::calculate_energy_drinkers() * self::PREFER_CITRUS_DRINKS);
    }
}

$surveyed = EnergyDrinkSurvey::PEOPLE_SURVEYED;

echo 'Total number of people surveyed: ' . $surveyed . PHP_EOL;
echo 'Approximately ' . EnergyDrinkSurvey::calculate_energy_drinkers() . ' bought at least one energy drink.' . PHP_EOL;
echo EnergyDrinkSurvey::calculate_prefer_citrus() . ' of those prefer citrus flavored energy drinks.' . PHP_EOL;


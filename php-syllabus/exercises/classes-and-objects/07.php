<?php

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother = null, ?Dog $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getFathersName(): string
    {
        return $this->father ? $this->father->name : "Unknown";
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        return ($this->mother && $otherDog->mother) ? ($this->mother->name === $otherDog->mother->name) : false;
    }
}

class DogTest
{
    public static function main()
    {
        $max = new Dog("Max", "male", new Dog("Lady", "female"), new Dog("Rocky", "male"));
        $coco = new Dog("Coco", "female", new Dog("Molly", "female"), new Dog("Buster", "male"));
        $rocky = new Dog("Rocky", "male", new Dog("Molly", "female"), new Dog("Sam", "male"));
        $buster = new Dog("Buster", "male", new Dog("Lady", "female"), new Dog("Sparky", "male"));

        echo $coco->getFathersName() . PHP_EOL;
        echo $buster->getFathersName() . PHP_EOL;
        echo $rocky->getFathersName() . PHP_EOL;
        echo $max->getFathersName() . PHP_EOL;

        echo $coco->hasSameMotherAs($max) ? "Yes" : "No" . PHP_EOL;
        echo $coco->hasSameMotherAs($buster) ? "Yes" : "No" . PHP_EOL;
    }
}

DogTest::main();


<?php
class Person {
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    public function isAdult(): bool {
        return $this->age >= 18;
    }
}


$person = new Person("daniels", "asd", 19);

if ($person->isAdult()) {
    echo "{$person->name} {$person->surname} has reached the age of 18";
} else {
    echo "{$person->name} {$person->surname} has not reached the age of 18 yet";
}
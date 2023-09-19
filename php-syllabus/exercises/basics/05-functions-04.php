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

    public function isAdult() {
        return $this->age >= 18;
    }
}

$people = array(
    new Person("aaa", "a", 19),
    new Person("bbb", "b", 16),
    new Person("ccc", "c", 30),
    new Person("ddd", "d", 17)
);

foreach ($people as $person) {
    if ($person->isAdult()) {
        echo "{$person->name} {$person->surname} has reached the age of 18\n";
    } else {
        echo "{$person->name} {$person->surname} has not reached the age of 18 yet\n";
    }
}

<?php
class Person
{
    public $name;
    public $licenses = array();
    public $cash;

    public function __construct($name, $licenses, $cash)
    {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }

    public function canPurchaseGun($gun): bool
    {
        return (in_array($gun->licenseRequired, $this->licenses) && $this->cash >= $gun->price);
    }
}

class Gun {
    public $name;
    public $licenseRequired;
    public $price;

    public function __construct($name, $licenseRequired, $price) {
        $this->name = $name;
        $this->licenseRequired = $licenseRequired;
        $this->price = $price;
    }
}

$person = new Person("daniels", array("A", "B"), 1337);

$guns = array(
    new Gun("pistol", "A", 444),
    new Gun("shotgun", "B", 666),
    new Gun("rifle", "C", 1313)
);

foreach ($guns as $gun) {
    if ($person->canPurchaseGun($gun)) {
        echo "{$person->name} can buy {$gun->name}\n";
    } else {
        echo "{$person->name} can't buy {$gun->name}\n";
    }
}


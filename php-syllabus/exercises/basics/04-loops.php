<?php

$x = "===============================\n";

echo "Exercise 1: \n";
$arr = [1,2,3,4,5,6,7,8,9,10];
foreach ($arr as $num) {
    echo $num. " ";
}
echo "\n";
echo $x;

echo "Exercise 2: \n";
$arr2 = [1,2,3,4,5,6,7,8,9,10];
for ($i = 0; $i < count($arr2); $i++) {
    echo $arr2[$i] ." ";
}
echo "\n";
echo $x;

echo "Exercise 3: \n";
$z = 1;
while ($z < 10) {
    echo "Codelex \n";
    $z++;
}
echo $x;

echo "Exercise 4: \n";
$arr3 = [1,2,3,4,5,6,7,8,9];
for ($j = 0; $j < count($arr3); $j++) {
    if ($arr3[$j] % 3 === 0) {
        echo $arr3[$j]. "\n";
    }
}
echo $x;

echo "Exercise 5: \n";
class Person {
    public $name;
    public $surname;
    public $age;
    public $birthday;

    public function __construct($name, $surname, $age, $birthday) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->birthday = $birthday;
    }
}

$persons = array(
    'person1' => new Person('daniels', 'asd', 19, '18/10/2003'),
    'person2' => new Person('aaa', 'sss', 66, '22/22/2222'),
    'person3' => new Person('bbb', 'ddd', 77, '11/11/1111')
);

foreach ($persons as $key => $person) {
    echo "Person: $key\n";
    echo "Name: {$person->name}\n";
    echo "Surname: {$person->surname}\n";
    echo "Age: {$person->age}\n";
    echo "Birthday: {$person->birthday}\n";
    echo "\n";
}
echo $x;
<?php
class Person {
    public $name;
    public $age;

    public function introduce() {
        echo "Hi, my name is {$this->name} and I'm {$this->age} years old.";
    }
}

$person1 = new Person();
$person1->name = "Alice";
$person1->age = 25;
$person1->introduce();

echo "\n";

$person2 = new Person();
$person2->name = "Bob";
$person2->age = 30;
$person2->introduce();
?>
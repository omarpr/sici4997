<?php

class Person {
    public $firstName;
    public $lastName1;
    public $lastName2;
    public $dateOfBirth;
    
    public function __construct($firstName = '', $lastName1 = '', $lastName2 = '', $dateOfBirth = '') {
        $this->firstName = $firstName;
        $this->lastName1 = $lastName1;
        $this->lastName2 = $lastName2;
        $this->dateOfBirth = $dateOfBirth;
    }
    
    public function getFullName() {
        return "$this->firstName $this->lastName1 $this->lastName2";
    }
}

$a = new Person();
$a->firstName = 'Omar';
$a->lastName1 = 'Soto';
$a->lastName2 = 'Fortuno';
$a->dateOfBirth = '19/Feb/1989';

echo '<pre>' . print_r($a, true) . '</pre>';

$b = new Person('Omar', 'Soto', 'Fortuno', '19/Feb/1989');

echo '<pre>' . print_r($b, true) . '</pre>';

echo $b->getFullName() . '<br />';

?>
<?php

include 'classes.php';

$persons = [];

$persons[] = ['Omar', 'Soto', 'Fortuno', '2/19/1989'];
$persons[] = ['Pedro', 'Soto', 'Fortuno', '2/19/1989'];
$persons[] = ['Juan', 'Soto', 'Fortuno', '2/19/1989'];
$persons[] = ['Carlos', 'Soto', 'Fortuno', '2/19/1989'];

$a = Person::loadByFirstName('Carlos');
if (is_null($a)) echo 'No existe Carlos';
echo '<pre>' . print_r($a, true) . '</pre>';

$b = Person::loadByFirstName('Jean');
if (is_null($b)) echo 'No existe Jean';
echo '<pre>' . print_r($b, true) . '</pre>';




$c = new Person('Yamira', 'Soto', 'Fortuno', '2/19/1989');
$c->save();
echo '<pre>1 = ' . print_r($persons, true) . '</pre>';

$c->lastName1 = 'Quiñones';
$c->save();
echo '<pre>2 = ' . print_r($persons, true) . '</pre>';

$c->lastName2 = 'Ortiz';
$c->id = 8;
$c->save();
echo '<pre>3 = ' . print_r($persons, true) . '</pre>';

?>
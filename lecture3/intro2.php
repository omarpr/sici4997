<?php

echo 'Omar<br>';

echo 'http://sici4997.uprp.edu/~omar/sici4997/lecture3/intro2.php<br>';

echo "Como estás?<br>";

$name = 'Omar';
$fName = 'Soto';

echo 'Mi nombre es... ' . $name . '<br>';

echo "Mi nombre es... $name $fName<br>";

echo "Mi nombre es... {$name}a<br>";

echo "Mi nombre es... \$name \$fName<br>";

echo "Linea 1\nLinea2\nLinea3\n";

echo nl2br("Linea 1\nLinea2\nLinea3\n");

echo 'Linea 1\nLinea2\nLinea3\n';

echo "\xF0\x9F\x98\x81<br>";

$a = 'Prueba';

echo 'Is String?' . is_string($a) . '<br>';

$b = 20;

echo 'Is String?' . is_string($b) . '<br>';
echo 'Is Numeric?' . is_numeric($b) . '<br>';

echo "5" + 5 . '<br>';

echo 5 + "5" . '<br>';

$letra = '25';
echo (int)$letra * 20 . '<br>';

define('MUNICIPAL_TAX', 0.005);
define('STATE_TAX', 0.11);

$price = 25;
$taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
$taxes = round($taxes, 2);
$total = $price + $taxes;

echo "Item price: $price<br>";
echo "Taxes: $taxes<br>";
echo "Total: $total<br>";

function showIVU($price, $desc = 'UNDEFINED') {
    $taxes = calculateIVU($price);
    $total = $price + $taxes;
    
    echo "Name: <b>$desc</b><br>";
    echo "Item price: $price<br>";
    echo "Taxes: $taxes<br>";
    echo "Total: $total<br><br>";
}

function calculateIVU($price) {
    $taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
    $taxes = round($taxes, 2);
    
    return $taxes;
    //return round($taxes, 2);
}

showIVU(9.99);
showIVU(5, 'Toilet Paper');
showIVU(1.99, 'Hand Sanitizer');

$scope1 = 'Hola';

function testScoping() {
    global $scope1;
    
    echo $scope1 . '<br>';
}

function isA($grade) {
    return ($grade >= 90);
}

testScoping();

echo 'isA 95? ' . isA(95) . '<br>';
echo 'isA 100? ' . isA(100) . '<br>';
echo 'isA 80? ' . isA(80) . '<br>';

function showDate($time = null) {
    if ($time == null) {
        $time = time();
    }
    
    echo date('g:i:s a', $time) . '<br>';
}

showDate();

echo '<br>';

//sleep(10);
showDate();
showDate(time() + 1);

echo strrev('Omar') . '<br>';
echo str_repeat("\xF0\x9F\x98\x81", 10) . '<br>';
echo strtoupper('omar') . '<br>';
echo strtolower('OMARjklfjLsqJ') . '<br>';
echo str_replace('a', 'i', 'Me llamo Omar') . '<br>';
echo str_replace(['a', 'e', 'o', 'u', 'A', 'E', 'O', 'U'], 'i', 'Me llamo Omar') . '<br>';
echo ucfirst('OMAR') . '<br>';

$name = 'OMaR';
$fname = 'soto';

echo ucfirst(strtolower($name)) . ' '. ucfirst(strtolower($fname)) . '<br>';

echo '<pre>' . print_r($_GET, true) . '</pre></br>';
echo '<pre>' . print_r($_REQUEST, true) . '</pre></br>';

?>
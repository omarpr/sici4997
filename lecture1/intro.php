<?php

echo 'Hola SICI4997!<br><br>http://sici4997.uprp.edu/~username/intro.php<br>';

# Comentario

// Comentario

/* Comentario multi línea
 * Hola
 * como
 * estas
 */

echo 'Hola<br>'; // Saludando
echo 'Como estas?<br>'; # Preguntando

$nota = 'A'; // Variable con un String

$promedio = 3.5; // Variable con un Decimal

$notas = ['A', 'B', 'C', 'D', 'F']; // Variable con un Array

$temp = []; // Así se define un Array vacío
$temp = array(); // Estas es otra forma

// Uniendo texto y variables e imprimiendo
echo 'Yo quiero en este clase sacar ';
echo $nota;
echo ' para de esa forma tener un promedio de ';
echo $promedio;
echo '<br>';

$quizz = 7;
$quizzTotal = 10;

$promedioQuizz = ($quizz / $quizzTotal) * 100; // Operadores aritméticos

echo 'Saque en el quizz un promedio de: ';
echo $promedioQuizz;
echo '%<br>';

echo 'Después del bono, saque en el quizz: ';
echo $promedioQuizz++; // 70%
echo '%<br>';

echo 'Después del bono, saque en el quizz: ';
echo ++$promedioQuizz; // 72%
echo '%<br>';

echo '5 + 6 = ';
echo (5 + 6);
echo '<br>';

$quince = 15;
$quince /= 3; // 5

echo $quince;
echo '<br>';

$intro = 'Mi nombre es ';
$intro .= 'Omar G. Soto Fortuño';
echo $intro . '<br>' . 'Después<br>';

$outcome = ($promedioQuizz > 80); // Operador de comparación

echo 'Saque mas de 80 en el quizz? ' . $outcome . '<br>';

$outcome2 = ($promedioQuizz <= 80); // Operador de comparación

echo 'Saque menos de 80 en el quizz? ' . $outcome2 . '<br>';

/*
 * Combinación de operaciones lógicos y de comparación
 */
$notaF = ($promedioQuizz < 60);
$notaD = ($promedioQuizz >= 60 && $promedioQuizz < 70);
$notaC = ($promedioQuizz >= 70 && $promedioQuizz < 80);
$notaB = ($promedioQuizz >= 80 && $promedioQuizz < 90);
$notaA = ($promedioQuizz >= 90);

// Se mostrará un 1 en la expresión booleana que evalúe a TRUE. En este caso, debería ser la C
echo 'Notas:<br>';
echo 'Tiene A? ' . $notaA . '<br>';
echo 'Tiene B? ' . $notaB . '<br>';
echo 'Tiene C? ' . $notaC . '<br>'; // Aquí debería salir el 1
echo 'Tiene D? ' . $notaD . '<br>';
echo 'Tiene F? ' . $notaF . '<br>';

?>
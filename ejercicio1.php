<?php
// Capturar los números A, B, y C desde $_GET y convertirlos a enteros
$a = isset($_GET['A']) ? intval($_GET['A']) : 0;
$b = isset($_GET['B']) ? intval($_GET['B']) : 0;
$c = isset($_GET['C']) ? intval($_GET['C']) : 0;

// Crear un array para almacenar los números
$numeros = ['A' => $a, 'B' => $b, 'C' => $c];

// Comparar los números y almacenar los resultados en variables
$compA_B_menor = ($a < $b) ? 'A es menor que B' : 'A no es menor que B';
$compA_B_mayor = ($a > $b) ? 'A es mayor que B' : 'A no es mayor que B';
$compA_B_igual = ($a == $b) ? 'A es igual a B' : 'A no es igual a B';

$compB_C_menor = ($b < $c) ? 'B es menor que C' : 'B no es menor que C';
$compB_C_mayor = ($b > $c) ? 'B es mayor que C' : 'B no es mayor que C';
$compB_C_igual = ($b == $c) ? 'B es igual a C' : 'B no es igual a C';

$compC_A_menor = ($c < $a) ? 'C es menor que A' : 'C no es menor que A';
$compC_A_mayor = ($c > $a) ? 'C es mayor que A' : 'C no es mayor que A';
$compC_A_igual = ($c == $a) ? 'C es igual a A' : 'C no es igual a A';

// Mostrar los números
echo "Números:<br>";
echo "A: $a<br>";
echo "B: $b<br>";
echo "C: $c<br>";

echo "<br>Comparaciones:<br>";
// Mostrar los resultados de las comparaciones
echo "A < B: $compA_B_menor<br>";
echo "A > B: $compA_B_mayor<br>";
echo "A = B: $compA_B_igual<br>";

echo "B < C: $compB_C_menor<br>";
echo "B > C: $compB_C_mayor<br>";
echo "B = C: $compB_C_igual<br>";

echo "C < A: $compC_A_menor<br>";
echo "C > A: $compC_A_mayor<br>";
echo "C = A: $compC_A_igual<br>";
?>

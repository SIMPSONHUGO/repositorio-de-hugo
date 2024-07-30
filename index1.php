<?php
$nombre = "Hugo";
$talla = 1.75;
$peso = 60;
$musica = array("Green Day", "The Weekend");
$bandera = true;
print("Nombre: " . $nombre . "<br>");
printf("Talla: %.2f<br>", $talla);
print("peso: " . $peso . "<br>");
echo "bandera: " . ($bandera ? 'true' : 'false') . "<br>";
var_dump ($musica);
/*operadores*/
$a=$_GET['A'];
$b=$_GET['B'];
echo ("el resultado de la suma es: ".$a+$b ."<br>");
echo ("el resultado de la resta es: ".$a-$b ."<br>");
echo ("el resultado de la multiplicacion es: ".$a*$b ."<br>");
echo ("el resultado de la division es: ".$a/$b ."<br>");
echo ("el resultado del modulo es: ".$a%$b ."<br>");
// COMPARATIVOS
var_dump ($a>$b);
echo "<br>";
var_dump ($a<$b);
echo "<br>";
var_dump ($a<=$b);
echo "<br>";
var_dump ($a>=$b);
echo "<br>";
var_dump ($a==$b);
echo "<br>";
var_dump ($a===$b);
echo "<br>";
var_dump ($a<=>$b);
echo "<br>";
?>
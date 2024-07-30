<?php
$cliente="hugo acosta";
//saber el atmaño de la cadena 
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
//limpiar espacio en blancos
$texto="hugo acosta";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";
//convertir mayusculas y minusculas
echo(strtolower($cliente));
echo "<br>";
echo(strtoupper($texto));
var_dump(strtolower($cliente)===strtolower($texto));
//reemplazar
echo "<br>";
echo str_replace("hugo","pepe",$cliente);
//buscar posicion
echo "<br>";
echo strpos($cliente,"pedro");
//buscar 
echo substr_count($cliente,"h");
//dividir cadena
$cadena=explode("a",$texto);
var_dump($cadena);

//unir
echo "<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);

?>
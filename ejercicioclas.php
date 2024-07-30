<?php
$usuario = "hu1gui1to";
$contraseña = "123456";
$repetir = "123456";

///////////////
echo $contraseña === $repetir ? "true<br>" : "false<br>";
////////////
$division = explode("1", $usuario);
var_dump ($division);
//////////////////
echo "<br>";
echo substr_count($division[0], "m");
echo "<br>";
echo substr_count($division[1], "m");
echo "<br>";
echo substr_count($division[2], "m");

?>
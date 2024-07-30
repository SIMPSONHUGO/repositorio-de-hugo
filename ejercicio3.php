<?php
//array de una dimension 
$platos=array("saice","sopa","pescado");
$platos=["saice","sopa","chancho"];
var_dump($platos);
echo "<pre>";
var_dump($platos);
echo "/<pre>";
//insertar datos 
$platos[2]="nuevo plato";
$platos[3]="chancho";
echo "<pre>";
var_dump($platos);
echo "/<pre>";
//insertar al inicio
array_unshift($platos,"jugos");
echo "<pre>";
var_dump($platos);
echo "/<pre>";

//insetar al final
array_push($platos,"ensaladas");
echo "<pre>";
var_dump($platos);
echo "/<pre>";

//array de dos dimensiones
$electrodomesticos=array(
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "accesorios"=>array(
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",
    )
);
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";

echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>".$electrodomesticos
["accesorios"]["smart"];
//insertar un nuevo accesorio
//array_push($electrodomesticos["accesorios"],"usb","si");
$electrodomesticos["accesorios"]["usb"]="si";
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";
//manejar los indices
$clientes=[];
var_dump(empty($platos));
var_dump(empty($electrodomesticos));
var_dump(empty($clientes));
var_dump(isset($clientes));
var_dump(isset($electrodomesticos["procedencia"]));
//ordenar menor a mayor
sort($platos);
echo "<pre>";
var_dump($platos);
echo "/<pre>";
//ordenar mayor a menor
rsort($platos);
echo "<pre>";
var_dump($platos);
echo "/<pre>";
//ordenar array dos dimensiones valores de acuerdo al alfabeto ascendente
asort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";
//ordenar array dos dimensiones valores de acuerdo al alfabeto descendente
arsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";
//ordenar array dos dimensiones valores de acuerdo al alfabeto ascendente
ksort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";
//ordenar array dos dimensiones valores de acuerdo al alfabeto descendiente
krsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "/<pre>";
?>
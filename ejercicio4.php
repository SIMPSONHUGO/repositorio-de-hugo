<?php
$competidores = [
    "corredor1" => [
        "nombre" => "pedro",
        "tiempo" => 11.98,
    ],
    "corredor2" => [
        "nombre" => "juan",
        "tiempo" => 12.00,
    ],
    "corredor3" => [
        "nombre" => "pepe",
        "tiempo" => 11.55,
    ],
    "corredor4" => [
        "nombre" => "caro",
        "tiempo" => 11.30,
    ],
    "corredor5" => [
        "nombre" => "hugo",
        "tiempo" => 10.80,
    ],
    "corredor6" => [
        "nombre" => "sebas",
        "tiempo" => 12.35,
    ],
    "corredor7" => [
        "nombre" => "Jhon",
        "tiempo" => 11.90,
    ],
    "corredor8" => [
        "nombre" => "carlos",
        "tiempo" => 11.40,
    ],
    "corredor9" => [
        "nombre" => "daniel",
        "tiempo" => 12.40,
    ],
    "corredor10" => [
        "nombre" => "jorge",
        "tiempo" => 12.50,
    ]
];

//ordenar por tiempo
usort($competidores, function ($a, $b) {
    return $a['tiempo'] <=> $b['tiempo'];
});
echo "<pre>";
var_dump ($competidores);
echo "<pre>";
// Mostrar el ganador
echo "El ganador es: " . $competidores[0]['nombre'] . " con un tiempo de: " . $competidores[0]['tiempo'] . " segundos.<br>";

// Mostrar la diferencia del segundo con respecto al primero
echo "La diferencia del segundo con respecto al primero es: " . ($competidores[1]['tiempo'] - $competidores[0]['tiempo']) . " segundos.<br>";

// Mostrar el último en llegar
echo "El último en llegar es: " . $competidores[count($competidores) - 1]['nombre'] . " con un tiempo de: " . $competidores[count($competidores) - 1]['tiempo'] . " segundos.<br>";

// Mostrar los tres primeros lugares
echo "Los tres primeros lugares son:<br>";
echo "1. " . $competidores[0]['nombre'] ."<br>";
echo "2. " . $competidores[1]['nombre'] ."<br>";
echo "3. " . $competidores[2]['nombre'] ."<br>";
?>
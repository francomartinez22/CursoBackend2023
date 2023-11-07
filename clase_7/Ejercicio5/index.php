<?php
// Creamos un array asociativo de ciudades con índices personalizados
$ciudadesAsociativas = array(
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
);

// Mostramos las ciudades con sus índices
foreach ($ciudadesAsociativas as $indice => $ciudad) {
    echo "El índice de " . $ciudad . " es " . $indice . "<br>";
}
?>

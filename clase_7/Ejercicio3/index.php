<?php
// Creamos un array asociativo con información personal
$informacionPersonal = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
);

// Mostramos la información personal
foreach ($informacionPersonal as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
?>

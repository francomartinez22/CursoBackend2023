<?php
// Creamos un array para almacenar los 10 primeros números pares
$numerosPares = array();

// Llenamos el array con los 10 primeros números pares
for ($i = 2; $i <= 20; $i += 2) {
    $numerosPares[] = $i;
}

// Mostramos los números pares uno debajo del otro
foreach ($numerosPares as $numero) {
    echo $numero . "<br>";
}
?>

<?php
// Definimos la función para calcular el factorial
function calcularFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

// Llamamos a la función para calcular el factorial de 8
$factorialDe8 = calcularFactorial(8);

// Mostramos el resultado
echo "El factorial de 8 es $factorialDe8";
?>

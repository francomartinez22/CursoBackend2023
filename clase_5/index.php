<?php
// 1) Mostrar los números del 1 al 9.
echo "1) Mostrar los números del 1 al 9:\n";
for ($i = 1; $i <= 9; $i++) {
    echo $i . " ";
}

echo "\n\n";

// 2) Mostrar los números del 9 al 1.
echo "2) Mostrar los números del 9 al 1:\n";
for ($i = 9; $i >= 1; $i--) {
    echo $i . " ";
}

echo "\n\n";

// 3) Mostrar los números pares del 1 al 20.
echo "3) Mostrar los números pares del 1 al 20:\n";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "\n\n";

// 4) Mostrar los números impares del 1 al 20.
echo "4) Mostrar los números impares del 1 al 20:\n";
for ($i = 1; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "\n\n";

// 5) Mostrar la suma de los números del 1 al 20.
echo "5) Mostrar la suma de los números del 1 al 20:\n";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
echo "La suma de los números del 1 al 20 es: " . $suma;

echo "\n\n";

// 6) Mostrar la suma de los números pares del 1 al 20.
echo "6) Mostrar la suma de los números pares del 1 al 20:\n";
$sumaPares = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $sumaPares += $i;
}
echo "La suma de los números pares del 1 al 20 es: " . $sumaPares;
?>

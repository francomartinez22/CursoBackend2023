<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de número</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Por favor, ingresa un número: </label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);
        echo "El número ingresado es: " . $numero . "<br>";

        if ($numero > 0) {
            echo "El número ingresado es un número positivo.";
        } else {
            echo "El número ingresado no es un número positivo.";
        }
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Ingreso un número</title>
</head>
<body>
    <!-- Formulario para ingresar un número -->
    <form method="POST" action="">
        <label for="numero">Por favor, ingresa un número: </label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Verifica si se ha enviado el formulario (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica si se ha ingresado un número
        if (isset($_POST['numero'])) {
            // Convierte la entrada a un número entero
            $numero = intval($_POST['numero']);
            
            // Verifica si el número está en el rango de 1 a 10
            if ($numero > 1 && $numero < 10) {
                echo "El número ingresado es mayor a 1 y menor a 10.";
            }
        }
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de número</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Por favor, ingresa un número: </label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);
            if ($numero >= 10 || $numero < 2) {
                echo "El número ingresado es mayor o igual a 10 o menor a 2.";
            } else {
                echo "El número ingresado no pudo ser validado.";
            }
        }
    }
    ?>
</body>
</html>


<?php
// Asigna valores a las variables numero1 y numero2
$numero1 = 7;
$numero2 = 4;

// Verifica si numero1 es mayor que numero2
if ($numero1 > $numero2) {
    // Si numero1 es mayor, calcula y muestra la suma y la resta
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;

    echo "numero1 es mayor que numero2:\n";
    echo "Suma: " . $suma . "\n";
    echo "Resta: " . $resta . "\n";
} elseif ($numero2 > $numero1) {
    // Si numero2 es mayor, calcula y muestra la multiplicación, la división entera y el resto
    $multiplicacion = $numero1 * $numero2;
    $division_entera = $numero2 / $numero1; // Nota: la división entera en PHP no tiene un operador específico
    $resto = $numero2 % $numero1;

    echo "numero2 es mayor que numero1:\n";
    echo "Multiplicación: " . $multiplicación . "\n";
    echo "División entera: " . $division_entera . "\n";
    echo "Resto: " . $resto . "\n";
} else {
    echo "numero1 y numero2 son iguales.";
}
?>

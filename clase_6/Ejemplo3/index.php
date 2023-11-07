<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $nota = $_POST["nota"];

    // Inicializamos una variable para almacenar el resultado de la calificación
    $calificacion = "";

    // Validamos si el nombre y la nota han sido ingresados
    if (empty($nombre)) {
        $calificacion = "El nombre del alumno no fue ingresado.";
    } elseif (empty($nota)) {
        $calificacion = "La nota no fue ingresada.";
    } else {
        // Validamos si la nota es un número y está en el rango de 0 a 10
        if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
            $calificacion = "La nota ingresada no es válida. Debe ser un número entre 0 y 10.";
        } else {
            // Determinamos la calificación según la nota
            if ($nota >= 0 && $nota <= 2) {
                $calificacion = "Muy deficiente";
            } elseif ($nota >= 3 && $nota <= 5) {
                $calificacion = "Insuficiente";
            } elseif ($nota >= 6 && $nota <= 7) {
                $calificacion = "Bien";
            } elseif ($nota >= 8 && $nota <= 9) {
                $calificacion = "Notable";
            } elseif ($nota == 10) {
                $calificacion = "Sobresaliente";
            }
        }
    }
} else {
    $nombre = "";
    $nota = "";
    $calificacion = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calificación de Alumnos</title>
</head>
<body>
    <form method="post" action="">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        <br>
        <label for="nota">Nota numérica:</label>
        <input type="text" id="nota" name="nota" value="<?php echo $nota; ?>" required>
        <br>
        <input type="submit" value="Calificar">
    </form>
    
    <p><?php echo $calificacion; ?></p>
</body>
</html>

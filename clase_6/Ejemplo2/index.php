<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el nombre del alumno y la nota
    $nombre = $_POST["nombre"];
    $nota = $_POST["nota"];
    
    // Validamos la nota y determinamos la calificación
    if (isset($nombre) && !empty($nombre) && isset($nota) && !empty($nota) && is_numeric($nota) && $nota >= 0 && $nota <= 10) {
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
    } else {
        $calificacion = "Datos ingresados incorrectamente";
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

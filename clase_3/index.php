<?php
    
    echo" Ejercicio 1"."<br>" ;
    
    echo" Hola Mundo"."<br>" ;

?>


<?php
 echo" Ejercicio 2"."<br>" ;
// Cargar la cadena en una variable
$mensaje = "Hola mundo";

// Imprimir la variable por pantalla
echo $mensaje. "<br>";
?>




<?php
echo" Ejercicio 3"."<br>" ;
// Crear dos variables enteras
$numero1 = 10;
$numero2 = 5;

// Calcular y mostrar la suma
$suma = $numero1 + $numero2;
echo "Suma: " . $suma . "<br>";

// Calcular y mostrar la resta
$resta = $numero1 - $numero2;
echo "Resta: " . $resta . "<br>";

// Calcular y mostrar la multiplicación
$multiplicacion = $numero1 * $numero2;
echo "Multiplicación: " . $multiplicacion . "<br>";

// Calcular y mostrar la división entera
$division_entera = $numero1 / $numero2;
echo "División entera: " . (int)$division_entera . "<br>";

// Calcular y mostrar el resto de la división entera
$resto = $numero1 % $numero2;
echo "Resto: " . $resto . "<br>";
?>



<?php
echo" Ejercicio 4"."<br>" ;
// Valor en grados Celsius
$gradosCelsius = 20;

// Aplicar la fórmula para convertir a grados Fahrenheit
$gradosFahrenheit = ($gradosCelsius * 9/5) + 32;

// Imprimir el resultado por pantalla
echo "20 grados Celsius son equivalentes a " . $gradosFahrenheit . " grados Fahrenheit."."<br>";
?>



<?php
echo" Ejercicio 5"."<br>" ;
// Datos del rectángulo
$baseRectangulo = 18; // cm
$alturaRectangulo = 12; // cm

// Calcular el área del rectángulo
$areaRectangulo = $baseRectangulo * $alturaRectangulo;

// Calcular el perímetro del rectángulo
$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);

// Imprimir resultados del rectángulo
echo "Rectángulo:\n";
echo "Área: " . $areaRectangulo . " cm²\n";
echo "Perímetro: " . $perimetroRectangulo . " cm\n";

// Datos del círculo
$radioCirculo = 30; // cm
$pi = 3.14159265359; // Valor aproximado de pi

// Calcular el área del círculo
$areaCirculo = $pi * ($radioCirculo ** 2);

// Calcular el perímetro del círculo (circunferencia)
$perimetroCirculo = 2 * $pi * $radioCirculo;

// Imprimir resultados del círculo
echo "\nCírculo:\n";
echo "Área: " . $areaCirculo . " cm²\n";
echo "Perímetro: " . $perimetroCirculo . " cm\n";
?>



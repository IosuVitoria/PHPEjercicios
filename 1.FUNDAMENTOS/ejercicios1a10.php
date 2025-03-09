<!-- 1. Declara una variable llamada `$nombre` y asígnale tu nombre. -->
<!-- 2. Define una variable de tipo entero y otra de tipo flotante.
3. Crea una variable booleana que almacene `true`.
4. Define una constante con el valor de `PI = 3.1416`.
5. Convierte un número flotante a entero utilizando `intval()`.
6. Muestra el tipo de una variable con `var_dump()`.
7. Concatena dos cadenas de texto y almacénalas en una variable.
8. Usa comillas dobles para incluir variables dentro de una cadena.
9. Suma dos números y muestra el resultado en pantalla.
10. Multiplica dos números y almacena el resultado en una variable. -->

<?php

    echo "Ejercicio 1 -------------------------------";
    echo "<br>";
    $nombre = "Iosu";
    echo "El nombre que tengo almacenado es: $nombre.";
    echo "<br>";

    echo "Ejercicio 2 -------------------------------";
    echo "<br>";
    $numeroEntero = 12;
    $numeroFlotante = 17.7;

    echo "Mi variable entera: $numeroEntero. Y mi variable flotante: $numeroFlotante";
    echo "<br>";

    echo "Ejercicio 3 -------------------------------";
    echo "<br>";
    $mayorEdad = true;
    echo "¿Soy mayor de edad? Respuesta: $mayorEdad.";
    echo "<br>";

    echo "Ejercicio 4 -------------------------------";
    echo "<br>";

    echo "<p> Para hacer una constante usamos la estructura: define('NOMBRE_VARIABLE', valor) </p>";

    define('PI', 3.1416);

    echo "El valor de PI es: " . PI;
    echo "<br>";

    echo "Ejercicio 5 -------------------------------";
    echo "<br>";
    $PI = 3.1416;
    $PI2 = intval($PI);

    echo "El valor de PI ajustado es: $PI2";
    echo "<br>";

    echo "Ejercicio 6 -------------------------------";
    echo "<br>";

    $persona = array("Iosu", 39, "Vitoria-Gasteiz", true);

    echo var_dump( $persona);

    echo "<br>";

    echo "Ejercicio 7 -------------------------------";
    echo "<br>";

    echo "<p> Declaramos dos variables de tipo cadena. </p>";
    $cadena1 = "Hola";
    $cadena2 = "mundo!";

    echo "<p> Concatenamos las dos cadenas usando el operador punto (.) </p>";
    echo $cadena1 . " " . $cadena2;
    echo "<br>";

    echo "Ejercicio 8 -------------------------------";
    echo "<br>";

    $nombre = "Iosu";

    echo "Mi nombre es: $nombre";

    echo "<br>";

    echo "Ejercicio 9 -------------------------------";
    echo "<br>";

    $numero1 = 5;
    $numero2 = 7;
    $numero3 = $numero1 + $numero2;

    echo "La suma de $numero1 y $numero2 es $numero3";

    echo "<br>";

    echo "Ejercicio 10 -------------------------------";
    echo "<br>";

    $numero4 = 5;
    $numero5 = 7;
    $numero6 = $numero1 * $numero2;

    echo "La multiplicación de $numero4 por  $numero5 es $numero6";

    echo "<br>";
?>



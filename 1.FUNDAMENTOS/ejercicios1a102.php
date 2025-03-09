<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP con Bootstrap</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ejercicios PHP con Bootstrap</h1>

        <!-- Ejercicio 1 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-user"></i> Ejercicio 1: Asignación de Variables</h4>
            </div>
            <div class="card-body">
                <p>En este ejercicio se declara una variable llamada <strong>$nombre</strong> y se le asigna el valor de un nombre (en este caso, "Iosu").</p>
                <pre><code>&lt;?php
$nombre = "Iosu"; // Declaramos una variable con un valor de texto
echo "El nombre que tengo almacenado es: $nombre."; 
?&gt;</code></pre>
                <?php
                    $nombre = "Iosu";
                    echo "El nombre que tengo almacenado es: $nombre.";
                ?>
            </div>
        </div>

        <!-- Ejercicio 2 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-cogs"></i> Ejercicio 2: Tipos de Variables</h4>
            </div>
            <div class="card-body">
                <p>Definimos dos variables, una de tipo <strong>entero</strong> y otra de tipo <strong>flotante</strong>.</p>
                <pre><code>&lt;?php
$numeroEntero = 12;  // Tipo entero
$numeroFlotante = 17.7;  // Tipo flotante
?&gt;</code></pre>
                <?php
                    $numeroEntero = 12;
                    $numeroFlotante = 17.7;
                    echo "Mi variable entera: $numeroEntero. Y mi variable flotante: $numeroFlotante";
                ?>
            </div>
        </div>

        <!-- Ejercicio 3 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-check-circle"></i> Ejercicio 3: Variable Booleana</h4>
            </div>
            <div class="card-body">
                <p>Definimos una variable de tipo <strong>booleano</strong> para almacenar si una persona es mayor de edad (en este caso, <strong>true</strong>).</p>
                <pre><code>&lt;?php
$mayorEdad = true;  // Tipo booleano
echo "¿Soy mayor de edad? Respuesta: $mayorEdad."; 
?&gt;</code></pre>
                <?php
                    $mayorEdad = true;
                    echo "¿Soy mayor de edad? Respuesta: $mayorEdad.";
                ?>
            </div>
        </div>

        <!-- Ejercicio 4 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-pi"></i> Ejercicio 4: Definir Constantes</h4>
            </div>
            <div class="card-body">
                <p>Para definir una constante en PHP usamos la función <strong>define()</strong>. En este caso, definimos una constante <strong>PI</strong> con el valor de 3.1416.</p>
                <pre><code>&lt;?php
define('PI', 3.1416);  // Definimos una constante llamada PI
echo "El valor de PI es: " . PI;
?&gt;</code></pre>
                <?php
                    define('PI', 3.1416);
                    echo "El valor de PI es: " . PI;
                ?>
            </div>
        </div>

        <!-- Ejercicio 5 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-arrow-down"></i> Ejercicio 5: Conversión de Tipos de Datos</h4>
            </div>
            <div class="card-body">
                <p>Usamos la función <strong>intval()</strong> para convertir un número flotante a tipo <strong>entero</strong>.</p>
                <pre><code>&lt;?php
$PI = 3.1416;
$PI2 = intval($PI);  // Convertimos el valor de PI a entero
echo "El valor de PI ajustado es: $PI2";
?&gt;</code></pre>
                <?php
                    $PI = 3.1416;
                    $PI2 = intval($PI);
                    echo "El valor de PI ajustado es: $PI2";
                ?>
            </div>
        </div>

        <!-- Ejercicio 6 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-database"></i> Ejercicio 6: Tipo de Datos con var_dump()</h4>
            </div>
            <div class="card-body">
                <p>Usamos la función <strong>var_dump()</strong> para mostrar el tipo de datos y valor de una variable.</p>
                <pre><code>&lt;?php
$persona = array("Iosu", 39, "Vitoria-Gasteiz", true);
echo var_dump($persona);  // Muestra tipo y valor de los datos
?&gt;</code></pre>
                <?php
                    $persona = array("Iosu", 39, "Vitoria-Gasteiz", true);
                    echo var_dump($persona);
                ?>
            </div>
        </div>

        <!-- Ejercicio 7 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-link"></i> Ejercicio 7: Concatenación de Cadenas</h4>
            </div>
            <div class="card-body">
                <p>En este ejercicio, concatenamos dos cadenas de texto utilizando el operador punto (<strong>.</strong>).</p>
                <pre><code>&lt;?php
$cadena1 = "Hola";
$cadena2 = "mundo!";
echo $cadena1 . " " . $cadena2;  // Concatenamos cadenas
?&gt;</code></pre>
                <?php
                    $cadena1 = "Hola";
                    $cadena2 = "mundo!";
                    echo $cadena1 . " " . $cadena2;
                ?>
            </div>
        </div>

        <!-- Ejercicio 8 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-comment-alt"></i> Ejercicio 8: Inclusión de Variables en Cadenas</h4>
            </div>
            <div class="card-body">
                <p>Usamos comillas dobles para incluir directamente el valor de una variable dentro de una cadena.</p>
                <pre><code>&lt;?php
$nombre = "Iosu";
echo "Mi nombre es: $nombre";  // Incluimos una variable dentro de una cadena
?&gt;</code></pre>
                <?php
                    $nombre = "Iosu";
                    echo "Mi nombre es: $nombre";
                ?>
            </div>
        </div>

        <!-- Ejercicio 9 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-plus"></i> Ejercicio 9: Sumar Números</h4>
            </div>
            <div class="card-body">
                <p>Realizamos una suma de dos números y mostramos el resultado.</p>
                <pre><code>&lt;?php
$numero1 = 5;
$numero2 = 7;
$numero3 = $numero1 + $numero2;  // Realizamos la suma
echo "La suma de $numero1 y $numero2 es $numero3";
?&gt;</code></pre>
                <?php
                    $numero1 = 5;
                    $numero2 = 7;
                    $numero3 = $numero1 + $numero2;
                    echo "La suma de $numero1 y $numero2 es $numero3";
                ?>
            </div>
        </div>

        <!-- Ejercicio 10 -->
        <div class="card my-4">
            <div class="card-header">
                <h4><i class="fas fa-times"></i> Ejercicio 10: Multiplicar Números</h4>
            </div>
            <div class="card-body">
                <p>Multiplicamos dos números y almacenamos el resultado en una variable.</p>
                <pre><code>&lt;?php
$numero4 = 5;
$numero5 = 7;
$numero6 = $numero4 * $numero5;  // Realizamos la multiplicación
echo "La multiplicación de $numero4 por $numero5 es $numero6";
?&gt;</code></pre>
                <?php
                    $numero4 = 5;
                    $numero5 = 7;
                    $numero6 = $numero4 * $numero5;
                    echo "La multiplicación de $numero4 por $numero5 es $numero6";
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

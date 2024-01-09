<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
</head>
<body>
    <?php
        $nombre = "Laura";
        $apellido = "Sánchez Iglesias";
        $numero1 = $_REQUEST["num1"];
        $numero2 = $_REQUEST["num2"];
        $operacion;

        echo "<h1>$nombre  $apellido</h1>";

        echo "<h2> Los operadores son: $numero1 y $numero2 </h2> ";

        $operacion = $numero1 + $numero2;
        echo "<p> La suma es $operacion </p>";

        $operacion = $numero1 - $numero2;
        echo "<p> La resta es $operacion </p>";

        $operacion = $numero1 * $numero2;
        echo "<p> La multiplicacion es $operacion </p>";

        $operacion = $numero1 / $numero2;
        echo "<p> La division es $operacion </p>";
    ?>
    
</body>
</html>
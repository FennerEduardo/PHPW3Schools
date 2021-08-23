<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciclos For y for each </title>
</head>
<body>
    <?php
    /*
    el ciclo For ejecuta un bloque de código un número de veces específico.
    
    CICLO FOR
    
    Este ciclo se usa cuando se conoce cuántas veces debe ejecutarse un programa.
    
    Sintaxis:
    
    for(contador inicial; test de contador; incremento de contador){
    código a ejecutar;
    }
    
    Párametros:
    -Contador inicial: inicia el valor del contador.
    -Test de contador: evalua si por cada iteración si el valor es verdadero en caso de que cambie el ciclo se detiene.
    -Incremento de contador: incrementar el valor del contador del ciclo.
    en este ejemplo se mestran los número de 1 a 10  */
    
    for ($x = 0; $x <= 10; $x++){
        echo "The number is $x <br>";
    }
    
    /*
    CICLO FOREACH
     Este ciclo trabaja solo para arreglos o vectores,  y se utiliza para recorrer cada par de clave / valor en un arreglo.
     
     sintaxis:
     
     foreach ($arreglo as $valor) {
        código a ejecutar;
     }
     /*Por cada iteración, el valor actual de cada elemento del arreglo es asignado a $valor y el cursor del arreglo es movido de a uno hasta alcanzar el último elemento del arreglo. en el siguiente ejemplo se demuestra un ciclo que mostrará los valores de salida del arreglo ($colors:) */
    
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value){
        echo "$value <br>";
    }
    ?>
</body>
</html>
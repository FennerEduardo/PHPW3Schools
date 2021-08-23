<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciclo While con PHP</title>
</head>
<body>
    <?php
    /*
    Los ciclos while de PHP ejecutan un bloque de código mieentras una condición específica se cumpla.
    
    CICLOS PHP (LOOPS)
    A menudo cuando se escribe, se quiere que el mismo bloque de código se ejecute una y otra vez en fila. En lugar de agregar  varios bloques de código iguales en un programa, se pueden usar ciclos para realizar está tarea. en PHP, existen las siguientes declaraciones de ciclos en PHP:
    
    El ciclo while: ejecuta un bloque de código siempre que la condición sea verdadera.
    
    Sintaxis:
    while (la condición es verdadera){
        código a ejecutarse
    }
    En el ejemplo se asigan 1 a la variable X y el ciclo continuará ejecutándose hasta que X sea menor o igual a 5, en cada ciclo X se incrementará en 1.
    */
    $x = 1;
    while ($x <= 5){
        echo "The number is: $x <br>";
        $x++; #Incremento de X
    }
    /*
    El ciclo do...while: Siemrpe ejecuta el bloque de código aunque sea una vez, luego revisa la condición y repite el ciclo hasta que la condición se cumpla.
    
    Sintaxis:
    do {
    código a ejecutar;
    } while (la condición es verdadera);
    Para este ejemplo se asigna a X el valor de 1, el código se ejecuta mostrando el valor de la variable y luego revisa la condición del while, repetirá el ciclo hasta que llegué a 5 el incremento de X:
    */
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    
    /*Para el ciclo do...while la condición se revisa después de ejecutar las declaraciones dentro del ciclo, esto significa que el ciclo ejecuta el código al menos una vez, incluso si la condición no se cumple al iniciar. Para ello  veremos un ejemplo:*/
    $x = 8;
    do {
        echo "The number is: $x <br>";
        $x++;
    }while ($x <= 5);
    
    ?>
</body>
</html>
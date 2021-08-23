<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Switch en PHP</title>
</head>
<body>
    <?php
    /*
    El switch se usa para realizar diferentes acciones basados en diferentes condiciones. Selecciona uno de varios bloques de código
    
    Sintaxis:
    
    switch (n) {
    
    case Label1: 
        código a ejecutar si n=label1;
    }
    break;
    case Label2: 
        código a ejecutar si n=label2;
    }
    break;
    case Label3: 
        código a ejecutar si n=label3;
    }
    break;
    
    ...
    default:
        código a ejecutar si n es diferente a los valroes de label
    
    Como trabaja: Primero tenemos una expresión sencilla n, normalmente una variable, la cual se evalua una vez. El valor de la expresión es comparada con los valores de cada caso en la estructura. Sí hay una coincidencia, el bloque de código asociado con cada caso es ejecutado. break se usa para prevenir que se ejecute el siguiente caso automáticamente. default se usa cuando no hay ninguna coincidencia.
    */
    $favcolor ="re";
    
    switch ($favcolor) {
        case "red" :
            echo "Your favorite color is red!";
        break;
        case "blue" :
            echo "Your favorite color is blue!";
        break;
        case "green" :
            echo "Your favorite color is green!";
        break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos En PHP</title>
</head>
<body>
   <?php
    /*
    ARREGLOS (MATRICES O VECTORES)
    Un arreglo almacena múltiples valores en una variable simple.
    Ejemplo: */
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
    
    /*
    ¿Qué es un arreglo?
    Un arreglo es una variable especial, la cual puede almacenar más de un valor a la vez.
    Sí hay una lista de items, como una lista de nombre de autos por ejemplo y se almacenan en variables sencilla y se vería así:
    $cars1 = "Volvo";
    $cars2 = "BWM";
    $cars3 = "Toyota";
    
    ¡Cómo encontrar un valor especifico dentro de las variables con un ciclo? ¿Y sí no hay 3 carros sino 300?
    La solución es crear un arreglo.
    Un arreglo puede almacenar muchas variables bajo el mismo nombre, se puede acceder a los valores mediante la referencia de un número de índice.
    Para crear un arreglo se usa la sentencia array();
    En PHP hay tres tipos de arreglos:
    -Arreglos indexados: arreglos con un número de índice.
    - Arreglos asociados: arreglos con llaves nombradas.
    - Arreglos multidimensionales: arreglos que contienen uno o más arreglos.
    
    ARREGLOS INDEXADOS: 
    
    hay dos maneras de crear arreglos indexados:
    
    1. el índice puede ser asignado automáticamente (El índice inicia en 0), como este:
    $cars = array("Volvo", "BMW", "Toyota");
    
    2. el índice se puede asignar manualmente:
    
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    
    En el siguiente ejemplo se crea un arreglo llamado cars, se le asignan 3 elementos y luego se imprimen los textos contenidos en los valores del arreglo.
    */
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
    
    /*
    Obtener la longitud de un arreglo mediante la función de conteo count(), esta entrega el número de elementos que contiene el arreglo.  */
    echo count($cars);
    echo "<br>";
    
    /*Crear un ciclo que imprima todas los valores almacenados en el arreglo,se puede usar un for y quedaría así:   */
    $arrlength = count($cars);
    
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    /*Arreglos asociativos: son arreglos que usan  palabras claves que se les pueden asignar, hay dos maneras de crear arreglos asociativos: 
    
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    también se puede crear así:
    $age['Peter'] = "35";
    también se puede crear así:
    
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
    
    Las palabras claves pueden ser usados dentro de un programa:   */
    
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
    echo "Peter is " .$age['Peter'] . " Years old. ";
    echo "<br>";
    
    /*Para mostrar el contenido de todos los valores almacenados en el arreglos asociativo se hace mediante el ciclo foreach: */
    
    foreach($age as $x => $x_value){
        echo "Key= " . $x . " Value=" . $x_value. " Years old";
        echo "<br>";
    }
    /*Los arreglos multidimensionales se explican en PHP avanzado*/
    ?>
    
</body>
</html>
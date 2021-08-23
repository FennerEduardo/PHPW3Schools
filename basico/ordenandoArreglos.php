<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenando Arreglos </title>
</head>
<body>
    <?php
    /*
    Los elementos de un arreglo se pueden organizar alfabetica, númerica, ascendente o descendentemente.
    
    En este capítulo vamos a conocer las funciones de clasificación y organización de arreglos:
    
    sort() -organiza los arreglos en forma ascendente.
    rsort() -organiza los arreglos en forma ascendente.
    asort() -Organiza arreglos asociativos de forma ascendente, de acuerdo al valor.
    ksort() -Organiza arreglos asociativos de forma ascendente de acuerdo a la palabra clave.
    arsort() -organiza arreglos asociativos en orden descendentes de acuerdo al valor.
    krsort() - organiza arreglos asociativos en orden descendente de acuerdo a la palabra clave.
    
    Ejemplos:
    
    En el siguiente ejemplo se organizan los elementos del arreglo $cars de forma ascendente y alfabeticamente:
    */
    $cars = array("Volvo", "BMW", "Toyota");#Definimos el arreglo.
    sort($cars); #Ordenamos los valores del arreglo
    # A continuación creamos el ciclo para imprimir los valores almacenados
    $clength = count($cars);//obtenemos la cantidad de items del arreglo.
    for($x = 0; $x < $clength; $x++) {#Definimos  en el for que se incremente x sin que su valor supere la longitud del arreglo
        echo $cars[$x];# Imprimimos en pantalla el arreglo donde cada iteración depende del valor que tenga x.
        echo "<br>";
    }
    #En el siguiente ejemplo se organizan los valores de $numbers en forma ascendente y orden númerico.
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
      }
    #Para organizar los elementos de $cars de forma descendente y de según el alfabeto usamos la función rsort()
    rsort($cars);
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    #En el siguiente ejemplo se organizan los valores de $numbers en forma descendente y orden númerico.
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
      }
    /*vamos a ordenar un arreglos asociativo en orden ascendente de acuerdo a su valor con la función asort():    */
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    foreach($age as $a => $a_value) {
        echo "Key=" . $a . ", Value= " .$a_value;
        echo "<br>";
    }
    echo "<hr>";
    /*vamos a ordenar un arreglos asociativo en orden ascendente de acuerdo a su Palabra clave (key or index)con la función ksort():    */
   
    ksort($age);
    foreach($age as $a => $a_value) {
        echo "Key=" . $a . ", Value= " .$a_value;
        echo "<br>";
    }
    echo "<hr>";
    /*vamos a ordenar un arreglos asociativo en orden descendente de acuerdo a su valor con la función arsort():    */
   
    arsort($age);
    foreach($age as $a => $a_value) {
        echo "Key=" . $a . ", Value= " .$a_value;
        echo "<br>";
    }
    echo "<hr>";
    /*vamos a ordenar un arreglos asociativo en orden descendente de acuerdo a su palabra clave con la función krsort():    */
   
    krsort($age);
    foreach($age as $a => $a_value) {
        echo "Key=" . $a . ", Value= " .$a_value;
        echo "<br>";
    }
    
    ?>
</body>
</html>
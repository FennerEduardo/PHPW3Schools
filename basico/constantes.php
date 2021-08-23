<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Constantes en PHP</title>
</head>
<body>
   <?php
    #Las constantes se comportan parecido a las variables en PHP excepto que son definidas una vez y no pueden ser cambiadas o ser indefinidas.
    //Una constante es un identificados para un valor simple. el valor no puede ser cambiado durante el programa. Una constante valida inicia su nombre con una letra o un guión al piso, no se utiliza el signo dólar antes de las constante. A diferencia de las variables als constantes son automáticamente globales dentro del programa.
   /* Para crear una constante se usa la función define(). Sintaxis: 
            define(name, value, case-insesitive)
    Parámetros: 
    name: nombre de la constante.
    value: valor de la constante.
    case-insensitive: se especifica si es sensible o no a las mayúsculas, por defecto es falso.
    A continuación hay un ejemplo de sensible a las mayúsculas.
   */
    define ("GRETTING", "Welcome to W3School.com");
    echo GRETTING;
    echo "<br>";
    #Ahora veremos un ejemplo de no sensible a las mayúsculas. obsoleto 2021 php 7
    define ("GRETTING2", "Welcome to W3School.com",  true);
    echo GRETTING2;
    #Las constantes son globales, en elsiguiente ejemplo vamos a usar una de las constantes de arriba para usarse dentro de una función, aunque se haya definido por fuera de la misma.
    echo "<br>";
    function myTest(){
        echo GRETTING2;
    }
    myTest();
    ?>
</body>
</html>
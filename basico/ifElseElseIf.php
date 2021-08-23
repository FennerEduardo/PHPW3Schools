<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Declaraciones If...Else...ElseIf con PHP</title>
</head>
<body>
    <?php
    /*
    Las declaraciones de condición son usadas para mostrar diferentes acciones basados en condiciones.
    Muy a menudo cuando se escribe  código se quiere realizar diferentes acciones para diferentes condiciones, en estos casos se pueden usar declaraciones condicionales.
    En PHP tenemos las siguientes declaraciones condicionales:
    if: ejecuta algún código si se cumple (true) una condición.
    if...else: ejecuta algún código si una condición es verdadera y otro si la condición es falsa.
    if...elseif...else: ejecuta diferentes códigos para dos o más condiciones.
    swicth: selecciona uno de muchos bloques de código que pueden ser ejecutados.
    */
    /*
    Sintaxis:
    if (condición){
     Bloque de código a ejecutar si la condición es verdadera.
    }
    En el siguiente ejemplo se muestra un mensaje de buenos días si la hora es menor a las 20 horas:
    */
    $t = date("H");
    if ($t < "20"){
        echo "Have a good day!";
    }
    /*
    if (condición){
     Bloque de código a ejecutar si la condición es verdadera.
    }else {
    código a ejecutar si la condición no se cumple
    }
    ene el ejemplo se complementa el código dando un saldu de buenas noches si ya se ha pasado la hora 20.
    */
    if ($t < "20"){
        echo "Have a good day!";
    }else {
        echo "Have a good night!<br>";
    }
    /*
    if (condición){
     Bloque de código a ejecutar si la condición es verdadera.
    }else if (segunda condición) {
    código a ejecutar si la segunda condición  se cumple
    } else {
    código a ejecutar si no se cumplen todas las condiciones.
    }
    Para el siguiente ejemplo si es antes de las 10 se dirán buenos días, sí la hora es mayos a las 20 dirá buen día y en caso de que no se cumplan estas condiciones dirá buenas noches.
    */
    if ($t < "10"){
        echo "Have a good morning!";
    } elseif ($t < "20"){
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    
    # El switch se explicará en el siguiente capítulo.
    ?>
</body>
</html>
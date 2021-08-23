<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Echo y Print</title>
</head>
<body>
    <?php
    #En PHP hay dos formas básicas para obtener datos, éstas son el echo y print.
    #Echo y print son más o menos lo mismo, los dos se usan para mostrar los datos en la pantalla.
    //Las diferencias son que el echo no retorna valores mientras que print ha retornado el valor de 1 y puede ser usado en expresiones. Echo puede tomar múltiples parametros, aunque tal uso es raro, mientras que print solo puede tomar un argumento. Echo es mucho más rápido que print.
    #Echo puede usarse con o sin parentesis echo o echo().
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "String ", "was ","made ","with multiple parameters.";
    #En el siguiente ejemplo se muestran como se  pueden obtener valores de variables con echo.
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;
    
    echo "<h2>" .$txt1. "</h2>";
    echo "Study PHP at " .$txt2 . "<br>";
    echo $x + $y;
    
    #La declaración print puede ser usada con o sin parentesis print o print().
    #para mostrar texto como en el siguiente ejemplo, el texto puede contener etiquetas o tags de HTML:
    print "<h2>PHP is Fun!</h2>";
    print "Hello world! <br>";
    print "I'm about to learn PHP!";
    
    #para mostrar variables de forma similar al echo
    print "<h2>" .$txt1. "</h2>";
    print "Study PHP at " .$txt2 . "<br>";
    print $x + $y;
    
    
    ?>
</body>
</html>
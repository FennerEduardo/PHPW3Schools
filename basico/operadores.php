<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operadores de PHP</title>
</head>
<body>
    <?php
    /*Operadores de PHP
    son usados para realizar operaciones con variables y constantes y están divididos en los siguientes grupos
    - Aritméticos.
    - De asignación.
    - De comparación.
    - De incremento o decremento.
    - Lógicos.
    - De cadenas o Strings
    - De arreglos o vectores.
    */
    /*
    OPERADORES ARITMÉTICOS
    Realizan las operaciones aritméticas básicas.
    Suma: $x + $y
    Resta: $x - $y
    Multiplicación: $x * $y
    División: $x / $y
    Módulo: $x % $y
    Potenciación: $x ** $y ->Este fu introducido en PHP 5.6
    Para los ejemplos se asiganarán las variables X y Y y se mostrarán con echo:
    */
    $x = 10;
    $y = 6;
    echo $x + $y. "<br>";
    echo $x - $y. "<br>";
    echo $x * $y. "<br>";
    echo $x / $y. "<br>";
    echo $x % $y. "<br>";
    echo $x ** $y. "<br>";
    
    /*
    OPERADORES DE ASIGNACIÓN
    Se usan para asignar valores a variables.
    El operador básico es =, esto significa que el operador de la izquierda toma el valor asignado en la expresión de la derecha.
    x = y es como x = y
    x += y es como x = x + y 
    x -= y es como x = x - y 
    x *= y es como x = x * y 
    x /= y es como x = x / y 
    x %= y es como x = x % y 
    Ejemplos:    */
    $x = 20;
    echo $x."<br>";
    $x = 20;
    $x +=100;
    echo $x."<br>";
    $x = 20;
    $x -=100;
    echo $x."<br>";
    $x = 20;
    $x *=100;
    echo $x."<br>";
    $x = 20;
    $x /=100;
    echo $x."<br>";
    $x = 20;
    $x %=100;
    echo $x."<br>";
    
    /*
    OPERADORES DE COMPARACIÓN 
    Se usan para comparar dos valores pueden ser número o strings, todos los resultados son true si la operación es verdadera.
    
    == igual 
    === idéntico
    != No igual
    <> no igual
    !== no idéntico
    > Mayor que
    < Menor que
    >= o igual 
    <= o igual
    */
    $x = 100;
    $y = "100";
    var_dump($x == $y); #Retorna true porque los valores son iguales.
    var_dump($x === $y); # Retorna false porque no son del mismo tipo.
    var_dump($x != $y);// Retorna flse porque los valores son iguales
    var_dump($x <> $y);//Retorna false porque los valores son iguales
    var_dump($x !== $y);//Retorna true porque no son idénticos
    var_dump($x > $y);//Retorna false por los valoes son iguales
    var_dump($x < $y);//Retorna false por los valoes son iguales
    var_dump($x >= $y);//Retorna true por los valoes son iguales
    var_dump($x <= $y);//Retorna true por los valoes son iguales
    
    /*
    OPERADORES DE INCREMENTO Y DRECREMENTO
    
    Se usan para incrementar o decrementar valores de variable.
    
    ++$x  Pre- incremento incrementa $x de a uno y luego retorna $x
    $x++ Post-incremento Returna $x y después lo incrementa de a uno
    --$x  Pre- decremento decrementa $x de a uno y luego retorna $x
    $x-- Post-decremento Returna $x y después lo decrementa de a uno.
    Ejemplos:    */
    $x = 10;
    echo ++$x. "<br>";
    $x = 20;
    echo $x++. "<br>";
    $x = 30;
    echo --$x. "<br>";
    $x = 40;
    echo $x--. "<br>";
    
    /*
    OPERADORES LÓGICOS
    Los operadores lógicos son usados para combinar declaraciones condicionales.
    
    and (&&) -  da verdadero si los dos valores son verdaderos
    or (||) - da verdadero si uno de los dos valores es verdadero.
    xor - da verdadero si uno de los valores es verdadero pero no ambos.
    ! not da verdadero cuando el valor es falso
    
    Ejemplos:    */
    $x = 100;
    $y = 50;
    if ($x == 100 and $y == 50){
        echo "Hello world!<br>";
    }
    if ($x == 100 or $y == 80){
        echo "Hello world!<br>";
    }
    if ($x == 100 xor $y == 80){
        echo "Hello world!<br>";
    }
    if ($x == 100 && $y == 50){
        echo "Hello world!<br>";
    }
    if ($x == 100 || $y == 50){
        echo "Hello world!<br>";
    }
    if ($x !== 90){
        echo "Hello world!<br>";
    }
    
    /*
    OPERADORES DE CADENAS O STRINGS
    PHP  tiene dos operadores que son especialmente diseñados para cadenas
    
    . concatenación sirve para concatenar dos variables con texto
    .= concatenación y asignación de dos variables
    Ejemplos: */
    
    $txt1 = "Hello";
    $txt2 = " world! <br>";
    
    echo $txt1 . $txt2;
    $txt1 .= $txt2;
    echo $txt1;
    
    /*
    OPERADORES DE ARREGLOS
    
    Son usados para comparar arreglos
    
    + Unión: Une dos arreglos
    == Igualdad: Retorna true si los dos arreglos tienen los mismos pares clave / valor.
    === Identidad: Retorna true si los dos arreglos son exactamente iguales, tiene el mismo orden y el mismo tipo de datos.
    != Desigualdad: Retorna true si los arreglos no son iguales.
    <> Desigualdad: Retorna true si los arreglos no son iguales.
    !== No Idénticos: Retorna true si nos son idénticos los arreglos.
    ejemplos:     */
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    print_r($x + $y); //Unión de los arreglos
    var_dump($x == $y); //muestra si son iguales
    var_dump($x === $y); //muestra si son idénticos
    var_dump($x != $y); //muestra si no son iguales
    var_dump($x <> $y); //muestra si no son iguales
    var_dump($x !== $y); //muestra si no son idénticos


    // TERNARIOS
    // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
    ?>
</body>
</html>
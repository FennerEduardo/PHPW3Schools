<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Variables PHP</title>
</head>
<body>
    <?php
    #Declaración de variables en PHP, se hace de la siguiente manera
    $txt ="Hello world!";#Tipo String o cadena
    $x = 5;#Tipo entero
    $y = 10.5;#tipo decimal o flotante
    //Se muestran las variables en pantalla
    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    #las variables no pueden iniciar con un número, son sensibles a las mayúsculas y solo reciben carácteres alfanúmericos y el guión bajo _
    $txt = "W3Schools.com";
    echo "I Study in  $txt!<br>";
    #Las variables pueden ser incluídas en las cadenas de texto de un echo, aunque se pueden separar por puntos y conseguir el mismo resultado.
    echo "I Study in ". $txt . "!<br>";
    #También se pueden sumar las variables, por ejemplo:
    echo $x + $y;
    #PHP maneja tres tipos de variables, Globales, locales y estáticas
    $x = 8; #Está es una variable global
    function myTest(){
        #Usando la la variable x en esta función se generará un error
        echo "<p>Variable x inside function is: $x </p>";
    }
    myTest();
        
        echo "<p>Variable x outside function is: $x</p>"; #en este caso la variable  está fuera de la función y se muestra correctamente
    
        #En el siguiente ejemplo se muestra como se configura una variable local, es decir dentro de una función
    function myTest2(){
        $z = 7; # esta es una variable local
        echo "<p>Variable z inside function is: $z</p>";    
    }
    myTest2();
    
        echo "<p> Variable z outside function is: $z</p>";#En este caso la variable z no se puede ver desde fuera de la función al ser un variable local y no global como en el caso anterior
    //se pueden tener variables con el mismo nombre fuera y dentro de las funciones ya que solo se reconocen según su contexto sin embargo no es una buena practica repetir nombres de variables para evitar errores en la ejecución y mantenimiento del código.
    
    #la palabra reservada global nos permite acceder a variables globales para usarlas dentro de una función. Por ejemplo:
    function myTest3(){
        global $x, $y;
        $y = $x + $y;
    }
    
    myTest3(); 
        echo $y. "<br>"; #Imprime 18.5 
    #PHP almacena todas las variables globales en un arreglo al cual se puede acceder, sin embargo la posición de cada variable depende del nombre. Este arreglo también es accesible para usarse dentro de las funciones, ejemplo:
    function myTest4(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; #En este ejemplo se usa el arreglo para sumar las dos variables globales una función
    }
    
    myTest4();
    echo $y."<br>"; #entrega 26.5, por el resultado acumulado en la función anterior
    
    #Cuando se ejecuta una función, todas las variables son borradas, sin embargo en ocasiones cuando queremos que una variable local no se borre, necesitamos hacer otro trabajo, para esto usamos la palabra reservada  STATIC antes de declarar la variable. Ejemplo:
    
    function myTest5(){
        static $a =10;#Se asigna a como variable estática
        echo $a. "<br>"; # se muestra el valor asignado en pantalla
        $a++;#incrementamos el valor de a
    }
    #ejecutamos las función en repetidas ocasiones para ver como la variable no se borra al realizar la ejecución 
    myTest5();
    myTest5();
    myTest5();
    myTest5();
    
    ?>
</body>
</html>
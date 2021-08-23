<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Strings - Cadenas de Texto en PHP</title>
</head>
<body>
    <?php
    # String es una cadena de texto como, "Hello World!", en este capitulo aprenderemos las funciones más comunes para manipular Strings.
    # Obtener la longitud de un String, se hace mediante la función de PHP strlen() y retorna la cantidad de carácteres que la componen, ejemplo:
    echo strlen("Hello world!"); //Entrega 12
    echo "<br>";
     #Contar el número de palabras de un string se hace mediante la función str_word_count(). Ejemplo:
    echo str_word_count("Hello world"); //Entrega 2
    echo "<br>";
    #Revertir una cadena se hace con la función strrev(), ejemplo:
    echo strrev("Hello world!");//Entrega !dlrow olleH
    echo "<br>";
    #Encontrar un texto especifico dentro de una cadena es sencillo con la funcion strpos(). Si el texto es encontrado la función retorna un valor positivo de la posición en que se encuentra el texto o la palabra que se busca, sino es encontrado retornará un valor falso FALSE, ejemplo, se buscará la palabra world en la cadenaHello world!
    echo strpos("Hello world!", "world");//Entrega 6 que es la posición de la cadena donde inicia la palabra world
    echo "<br>";
    #Reemplazar un texto dentro de una cadena, se hace con la función str_replace(), para el ejemplo se va a reemplazar la palabra world por la palabra Fenner en la cadena.
    echo str_replace("world", "Fenner", "Hello world!"); // la salida será Hello Fenner!
    
    ?>
</body>
</html>
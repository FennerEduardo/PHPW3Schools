<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones en PHP</title>
</head>
<body>
    <?php
    /*
    El poder real de PHP viene de sus funciones, incluye más de 1000 funciones predefinidas.
    
    FUNCIONES DEFINIDAS POR EL USUARIO
    
    Además de las funciones incorporadas ,se pueden crear funciones propias. Una función es un bloque de declaraciones que pueden ser usadas repetidamente en un programa.
    Una función no debe ser ejecutada inmediatamente la página carga.
    Las funciones debene ser ejecutadas desde un llamado a las mismas.
    
    Crear un  función definida de usuario
    Se inicia con la palabra function.
    
    Sintaxis:
    
    function nombreFuncion() {
        código a ejecutar;
    }
    
    Nota: el nombre de una función puede iniciar con una letra o un guión bajo (No, números)
    Tip: Dele a la función un nombre que refleje lo que hace.
    
    Los nombres de las funciones no distinguen entre mayúsculas y minúsculas.
    
    En el ejemplo de abajo, se crea la función con nombre "writeMsg()". se inicia con un corchete de apertura y se termina la ejecución del código con el corchete de cierre. La  función entrega en pantalla "Hello world!". Para llamar la función solo se debe escribir su nombre. */
    
    function writeMsg() {
        echo "Hello world! <br>";
    }
    writeMsg(); //Llamado a la función 
    
    /*
    Argumentos de una función 
    
    La información puede ser pasada a las funciones a través de los argumentos, un argumento es como una variable.
    los argumentos se especifican después del nombre de la función y van entre los parentesís, se peden agregar tantos argumentos como se uiera, solo deben separarse  entre ellos por una coma.
    
    En el siguiente ejemplo la función tiene un argumento ($fname). Cuando familyName() es llamada podemos pasar diversos nombres para escribir en el argumento. La salida de la  función mostrará cada argumento (nombre) con el mismo apellido:
    */
    function familyName($fname) {
        echo "$fname Refsnes. <br>";
    }
    familyName ("Jani");
    familyName ("Hege");
    familyName ("Stale");
    familyName ("Kai Jim");
    familyName ("Borge");
    #En el siguiente ejemplo la función tiene dos argumentos ($fname and $year):
    
    function familyName2 ($fname, $year) {
        echo "$fname Refnes. Born in $year. <br>";
    }
    familyName2 ("Hege", "1975");
    familyName2 ("Stale", "1978");
    familyName2 ("Kai Jim", "1983");
    //También se pueden definir valores predeterminados a los argumentos de una función, por ejemplo:
    function setHeight($minheight = 50){
        echo "The height is $minheight <br>";
    }
    setHeight(350);
    setHeight();//El peso aparecerá de forma predeterminada en 50
    setHeight(390);
    setHeight(80);
    
    /*
    Retornando Valores con funciones: 
    
    Para que una función entregue  valores se debe usar la sentencia return:
    
    Ejemplo:
    */
    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = ". sum(5, 10) ."<br>";
    echo "7 + 13 = ". sum(7, 13) ."<br>";
    echo "2 + 4 = ". sum(2, 4) ."<br>";
    ?>
</body>
</html>
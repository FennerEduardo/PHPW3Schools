<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fecha y hora con PHP</title>
</head>
<body>
    <h2>Hora y Fecha con PHP</h2>
    <?php
    /*
    La función date() es usada para dar formato a la fecha o la hora, está función ayuda a hacer más legible los formatos de hora y fecha.
    
    Sintaxís:
    
    date(format, timestamp)
    
    Párametros: 
        Formato: Obligatorio, especifica el formato de la marca de tiempo.
        Marca de tiempo: Opcional, especifica una marca de tiempo, de manera predeterminada es la hora y la fecha actual.
        
    Nota: timestamp o marca de tiempo de una secuencia de caractéres, denotan la fecha y la hora cada vez que ocurre algún evento.
    
    Obtener una fecha simple:
    
    El párametro obligatorio format de la función date() especifica como es el formato de la fecha o la hora.
    Estos son algunos de los caracteres que más se usan para las fechas:
    
        1. d - Representa un dia del mes (01 a 31)
        2. m - Representa un mes (01 a 12)
        3. Y - Representa un año (en cuatro dígitos)
        4. l (minúscula 'L') - Representa el día de la semana
        
        Otros caracteres como "/", ".", o "-", también pueden ser insertados entre los caracteres como formatos adicionales.
    
    En el ejemplo veremos la fecha de hoy en tres diferentes formatos:
    */
    
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l"). "<br>";
    
    /*
    Tip de PHP, se puede usar la función date() para actualizar automáticamente la fecha del copyright de unn sitio web:
    */
    ?>
    &copy; 2010-<?php echo date("Y"); ?>
    
    <?php 
    /*
    Obtener una hora simple:
    
    Estos son algunos de los formatos más comunmente usados para las horas:
    
        1. H - Formato de 24 horas(00 a 23)
        2. h - formato de 12 horas con un cero  la izquierda(01 a 12)
        3. i - Minutos con ceros a la izquierda (00 a 59)
        4. s - Segundos con ceros a la izquierda (00 a 59)
        5. a - en minúscula para mostrar antes o después del medio día (am o pm)
    
    En el siguiente ejemplo se muestra la hora actual en un formato en especifico:
    */
    echo "<br>";
    echo "The time is " . date("h:i:sa");
    
    /*
    Obtener la zona horaria:
    
    Sí la hora que se imprimió no corresponde a la hora local, probablemente se debe a que el servidor está configurado con el horario de otro país o una zona horaria distinta.
    Entonces si necesita corregir de acuerdo a una locación especifia se puede configurar la zona horaria a usar.
    En el ejemplo de abajo se va a configurar la zona de "América/Bogota", entonces la salida  va a tener un formato especifico:
    */
    
    date_default_timezone_set("America/Bogota");
    echo "<br>";
    echo "The time is " . date("h:i:sa");
    
    /*
    FUNCIÓN mktime() - Crear una fecha
    
    el párametro opcional en la función date() especifica una marca de tiempo. Si no se especifica un valor, la fecha actual es la que se usará como lo vimos en los ejemplos anteriores.
    
    la función mktime() retorna la marca de tiempo Unix para una fecha. La marca de tiempo Unix contiene el número de segundos entre la época Unix (January 1 1970 00:00:00 GMT) y la hora especificada.
    
    Sintaxis: 
        mktime(hour,minute,second,month,day,year)
        
    En el siguiente ejemplo se crea una hora y una fecha con los párametros de la función mktime():
    */
    echo "<br>";
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date ("Y-m-d h:i:sa", $d);
    
    /*
    CREAR UNA FECHA DESDE UNA CADENA DE CARACTERES CON LA FUNCIÓN strtotime() DE PHP
    
    Esta función convierte una cadena legible para las personas al formato de tiempo de Unix
    
    Sintaxis:
        strtotime(time,now)
        
    En el sigueinte ejemplo se crea una fecha y una hora desde la función strtotime():
    */
    $d=strtotime("10:30pm April 15 2014");
    echo "<br>";
    echo "Created date is " . date ("Y-m-d h:i:sa", $d);
    
    /*
    PHP es bastante inteligente en cuanto a convertir una cadena en una fecha, por lo que puede poner varios valores:
    */
    echo "<br>";
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";
    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";
    $d=strtotime("+ 3 Months");
    echo date("Y-m-d h:i:sa", $d);
    
    #Esta función no es perfecta, entonces se debe tener en cuenta las cadenas que se pueden poner dentro para mostrar las fechas.
    
    echo "<br>";
    $d=strtotime("+ 3 Days");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";
    $d=strtotime("last Sunday");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";
    $d=strtotime("last Month");
    echo date("Y-m-d h:i:sa", $d);
    
    #Más ejemplos de fechas
    
    echo "<p> El siguiente ejemplo muestra las fechas de los próximos 6 sábados:</p> <br>";
    $stardate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $stardate);
    
    while ($stardate < $enddate) {
        echo date("M d", $stardate) . "<br>";
        $stardate = strtotime("+1 week", $stardate);
    }
    echo "<br>";
    echo "<p>En el siguiente ejemplo se mostrarán los días que han transcurrido desde el 6 de julio</p>";
    
    $d1=strtotime("July 06");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 . " days until 6th of July. ";
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtros Avanzados con PHP</title>
</head>
<body>
    <h1>Filtros Avanzados con PHP</h1>
    <?php
    /*
    +++++++++++ Validando Enteros  con un rango +++++++++
    
    En el siguiente ejemplo se usa la función filter_var() para validar si una variable es de dos tipos, entero y está entre 1 y 200:
    */
    $int = 122;
    $min = 1;
    $max = 200;
    
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range");
    } else {
        echo("Variable value is within the legal range");
    }
    echo "<br>";
    /*
    +++++++++++ Validando dirección  IPv6  +++++++++
    
    En el siguiente ejemplo se usa la función filter_var() para validar una dirección IPv6:
    */
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("$ip is a valid IPv6 address");
    } else {
        echo("$ip is not a valid IPv6 address");
    }
    echo "<br>";
    /*
    +++++++++++ Validando que una URL contenga cadenas de consulta  +++++++++
    
    En el siguiente ejemplo se usa la función filter_var() para validar si la URL tiene interacción con una base de datos:
    */
    $url = "https://fenner.abrilxvi.com?page=1";
    
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    } else {
        echo("$url is not a valid URL with a query string");
    }
    echo "<br>";
    /*
    +++++++++++ Removiendo caracteres con valor ASCII mayor a 127  +++++++++
    
    En el siguiente ejemplo se usa la función filter_var() para limpiar una cadena, en este caso remueve todos las etiquetas de HTML y todos los caracteres ASCII con valores superiores a 127:
    */
    $str = "<h1>Hello WorldÆØÅ!</h1>";
    
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    echo "<br>";
    ?>
</body>
</html>
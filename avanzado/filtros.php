<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtros con PHP</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Filtros con PHP</h1>
    <?php
   /* 
   - Validando datos: determina si los datos están en forma adecuada.
   
   - Limpiando datos: Remueve cualquier caratér ilegal de los datos.
   
   ++++++++ El filtro de extensiones de PHP ++++++++++
   
   Los filtros de PHP, son usados para validar y limpiar una entrada externa.
   
   El filtro de extensiones de PHP tiene muchas funciones necesarias para revisar una entrada de usuario, y está diseñado para hacer validación de datos fácil y rapidamente.
   
   La función filter_list() puede ser usada para mostrar los filtros de extensión que tiene PHP. Vamos a ver un ejemplo practico:
    */
    ?>
<table>
    <tr>
        <th>Filter Name</th>
        <th>Filter ID</th>
    </tr>
    <?php
        foreach (filter_list() as $id =>$filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
    ?>
</table>

     <?php
    /*
    ++++++++++ ¿Por qué usar filtros? +++++++++++++
    
    Muchas aplicaciones web reciben entradas externas. Una entrada de datos externa puede:
    
        - Usar entradas desde un formulario.
        - Cookies
        - Servicios de datos web.
        - Variables de Servidor
        - Resultados de consultas de bases de datos.
    
    Siempre se deben validar las entradas de datos externas:
    
    Una entrada de datos invalida puede producir problemas y dañar su sitio web.
    
    Usando los filtros de PHP usted puede estar seguro que su aplicación recibe los datos correctamente.
    
    
     ++++++++++ Función filter_var() +++++++++++++
     
     Esta función valida y limpia los datos.
     
     la función filtr una variable sencilla con un filtro especifico. Esta toma dos partes de los datos:
     
        - La variable que se quiere validar
        - El tipo de prueba a usar
     
     ++++++++++ Limpiando una cadena (String) +++++++++++++
     
     En el siguiente ejemplo se usará la función filter_var() para remover todos los tags o etiquetas de HTML de una cadena:
    */
    $str = "<h1> Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    echo "<br>";
    /*
    ++++++++++ Validando un entero (Integer) +++++++++++++
    
    El siguiente ejemplo usa la función filter_var(), para revisar si la variable $int es un entero, sí ña varianle es un entero el código devolverá "Integer is valid", sino es un entero la salida será "Integer is not valid":
    */
    $int = 0;
    
    if (!filter_var($int, FILTER_VALIDATE_INT) === false ) {
        echo("Integer is valid");
    } else {
        echo ("Integer is not valid");
    } 
    echo "<br>";
    
    /*   
    ++++++++++ filter_var() y el problema con el cero 0 +++++++++++++
    
    En el siguiente ejemplo, si la variable $int fue configurada con cero, la función retornará "Integer is not valid". Para resolver este problema, se puede usar el siguiente código:
    */
    $int = 0;
    
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo ("Integer is not valid");
    } 
    echo "<br>";
    /*
    ++++++++++ Validando una dirección IP  +++++++++++++
        
    En el siguien te ejemplo se usa la función filter_var() para validar que la variable $ip sea una dirección IPv4 valida:
    */
    $ip = "127.0.0.1";
    
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false ) {
        echo ("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    }
    echo "<br>";
    /*
    ++++++++++ Limpiando y validando una dirección IP  +++++++++++++
    
    El siguiente ejemplo usa la función filter_var(), primero para eliminar caracteres ilegales de la variable $email, después valida si es un dirección valida de correo electrónico:
    */
    $email = "fennereduardo@gmail.com";
    
    #Eliminar todos los caractares ilegales del email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    #Validando el email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
    echo "<br>";
    /*
    ++++++++++ Limpiando y validando una dirección URL  +++++++++++++
    
    El siguiente ejemplo usa la función filter_var(), primero para eliminar caracteres ilegales de la variable $url, después valida si es un dirección URL valida:
    */
    $url = "https://fenner.abrilxvi.com";
    
    #Eliminar todos los caractares ilegales del URL
    $url = filter_var($url, FILTER_SANITIZE_URL);
    
    #Validando el URL
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url is a valid URL address");
    } else {
        echo ("$url is not a valid URL address");
    }
    echo "<br>";
    ?>
</body>
</html>
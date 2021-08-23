<!DOCTYPE html>
<html lang="es">
<?php
    $cookie_name ="user";
    $cookie_value = "Jhon Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); # 86400 son la cantidad de segundos de un día
?>
<head>
    <meta charset="UTF-8">
    <title>Manejo de Cookies con PHP</title>
</head>
<body>
    <h1>Manejo de Cookies con PHP</h1>
    <?php
    /*
    ++++++++++ Manejo de Cookies +++++++
    
    Una cookies es usaualente usada para identificar a un usuario.
    
    ¿Qué es una Cookie?
    
    Es un archivo pequeño que el servidor incluye en computador del usuario. cada vez que algún computador hace una petición con un buscador, este le envía una cookie también, con PHP se pueden crear y recuperar valores de una Cookie.
    
    ++++++++++ Creando  Cookies +++++++
    
    Una cookie se crea con la función setcookie().
    
    Sintaxis:
        
        setcookie(name, value, expire, path, domain, secure, httponly);
    
    Solo name es un párametro obligatorio, los demás son opcionales.
    
    ++++++++++ Creando y Recuperando Cookies +++++++
      
    En el siguiente ejemplo se crea una cookie llamada "user" con el valor "John Doe". La cookie expirará después de 30 días (86400 * 30).El "/" significa que la cookie está disponible en el sitio web entero (De otra manera, seleccione el directorio o carpeta que usted desee).
    
    Para recuperar el valor de la cookie "user" (usando la variable global $_COOKIE). y la función isset() para encontrar la cookie si está fue configurada.
    
    NOTA IMPORTANTE: Para configurar la cookie la función setcookie(), debe aparecer ANTES  de la etiqueta <html>.
    
    El código de configuración de la Cookie es:
    
    <?php
    $cookie_name ="user";
    $cookie_value = "Jhon Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); # 86400 son la cantidad de segundos de un día
    ?>
    
    Luego de esto escribimos el código necesario para revisar el valor de la cookie.
    */
     if(!isset($_COOKIE[$cookie_name])) {
         echo "Cookie named ' " . $cookie_name . " ' is not set!";
     } else {
         echo "Cookie ' " . $cookie_name . " ' is set!<br>";
         echo "Value is: " . $_COOKIE[$cookie_name];
     }
    echo "<p><strong>Note:</strong> You might have to reload the page to see value of the cookie.</p>";
    /*
    El valor de la cookie se codifica automáticamente en la URL cuando se envía la cookie, y se descodifica automáticamente cuando se recibe (para evitar la codificación de la URL, use setrawcookie () en su lugar).
    */
    ?>
    
</body>
</html>
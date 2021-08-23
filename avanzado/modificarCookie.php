<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = " Fenner González";
    
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Cookies</title>
</head>
<body>
    <h1>Modificar Cookies</h1>
    <?php
    /*
    Para modificar una Cookie tan solo se debe configurar de nuevo la cookie usando la función setcookie().
    Recuerda que para configurarla la función setcookie debe ir antes de la etiqueta <html> de la página.
    */
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named ' " . $cookie_name . " ' is no set!";
    } else {
        echo "Cookie ' " . $cookie_name . " ' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name]; 
    }
    ?>
</body>
</html>
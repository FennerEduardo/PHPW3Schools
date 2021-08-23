<!DOCTYPE html>
<?php
session_start(); #Se inicia la sesión
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Obtener Variables de Sesión</title>
</head>
<body>
    <h1>Obtener Variables de Sesión</h1>
    <?php
    /*
    En esta página se va a obtener la información almacenada en las variables de sesión, Notése que las variables de sesión no son pasadas de manera individual en cada página nueva, por el contrario podemos recuperarlas abriendo la sesión en cada página con la función session_start().
    
    También se puede notar como todas las variables de sesión se almacenan en la variables global $_SESSION.
    */
    
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ". <br>";
    #Estas variables de sesión fueron almacenadas en el archivo anterior pero se pueden leer en el archivo actual.
    #También se pueden mostrar las variables con el siguiente código:
    print_r($_SESSION);
    
    /* 
    +++++++++ ¿Como funciona? ¿Cómo sabe que soy yo? +++++++++
    
    La mayoría de las sesiones establecen una clave de usuario en la computadora del usuario que se ve así: 765487cf34ert8dede5a562e4f3a7e12. Luego, cuando se abre una sesión en otra página, explora la computadora en busca de una clave de usuario. Si hay una coincidencia, accede a esa sesión, si no, comienza una nueva sesión.
    
    +++++++++ Modificar una variable de sesión +++++++++
    
    Para modificar una variable de sesión tan solo basta con sobre escribirla:    
    */
    echo "<br>";
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    ?>
</body>
</html>
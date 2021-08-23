<!DOCTYPE html>

<?php 
    session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Destruir Variables de Sesión</title>
</head>
<body>
    <h1>Destruir Variables de Sesión</h1>
    <?php
   /* Para remover todas las variables de sesión y destruir la sesión, se usan las funciones session_unset() y session_destroy():*/
    
    #Remover todas la variables de sesión:
    session_unset();
    #Destruir la sesión
    session_destroy();
    #revisando los valores de la sesión
    print_r($_SESSION);
    ?>
</body>
</html>
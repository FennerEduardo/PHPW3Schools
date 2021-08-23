<!DOCTYPE html>
<?php
setcookie("test_cookie", "test", time() + 3600, "/");
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Revisar Cookies activas con PHP</title>
</head>
<body>
    <h1>Revisar Cookies activas con PHP</h1>
    <?php
        #Para revisar que cookies hay activas en el sitio, primro se crea una cookie de prueba y después se cuentan las Cookies almacenadas en el arreglo de la vairable global $_COOKIE:
    if(count($_COOKIE) > 0) {
        echo "Cookies are enable.";
    } else {
        echo "Cookies are disabled.";
    }
    ?>
</body>
</html>
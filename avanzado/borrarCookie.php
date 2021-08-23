<!DOCTYPE html>
<?php
    setcookie("user", "", time() - 3600);# 3600 es el tiempo en segundos y se coloca un - para eliminar la cookie
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Cookie</title>
</head>
<body>
    <h1>Borrar cookies</h1>
    <?php
    #Para borrar una Cookie, tan solo es necesario configurar una fecha u hora anterior a la fecha de creación.
     echo "Cookie 'user' is deleted";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido A formularios con PHP</title>
</head>
<body>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php  echo $_POST['email'];?>
</body>
</html>
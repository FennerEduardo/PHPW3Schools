<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manejando formularios con PHP</title>
</head>
<body>
    <?php
    /*
    Para recolectar datos de los formularios se usan las variables superglobales $_GET y $_POST.
    
    En el siguiente ejemplo se verá un formulario sencillo de HTML, el cual llamará desde su acción a un archivo llamado welcome.php para mostrar los datos en pantalla usando el método POST.
    */
    ?>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php
    /*
    Este mismo ejemplo que se ha hecho se puede llamar usando el método Get, como se ve acontinuación.
    */
    ?>
    <br>
    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
      <?php
    /*
    si revisamos llos dos ejemplo y vemos las URL encontraremos las diferencias en la manera en que se envian los datos:
    Con POST se ve así: http://localhost/PHPW3Schools/formularios/welcome.php
    Con GET: así: http://localhost/PHPW3Schools/formularios/welcome_get.php?name=Fenner+&email=lynamoon%40hotmail.com
    
    Tanto Get como post almacenan las infromación en un arreglo y guarda valores con la palabra clave y el valor que se ha obtenido desde el formulario. Siendo variables super globales siempre tiene la información accesible y puede ser usada para cualquier función, clase o archivo sin un uso especial.
    
    El método Get se usa cuando se quier enviar información no sensible, como por ejemplo la ubicación de un producto en una  tienda on line, tiene un limite de 2000 caráteres y las variables siempre se verán en la URL.
    
    Por otra parte el método Post, almacena los valores de manera invisible para todos ya que lo hace desde el cuerpo de HTTP y no tiene limites en la cantidad de información a enviar. Más aún el método post tiene funciones avanzadas tales como compatibilidad para el envío de entradas binarias múltiples, mientras se cargan archivos al servidor.
    
    Nota importante: estos dos ejemplos no tiene ningún tipo de validación de datos; capítulos posteriores se harán formularios con validación de datos para proteger la web de ataques de hacking o Spam.
    */
    ?>
</body>
</html>
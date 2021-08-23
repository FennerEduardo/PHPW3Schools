<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manejando Archivos con PHP</title>
</head>
<body>
    <h2>Manejando Archivos con PHP</h2>
    <?php
    /*
    Manejar archivos es una parte importante en cualquir aplicación web. ocasionalmente se puede necesitar abrir o procesar un archivo para diferentes tareas.
    
    MANIPULANDO ARCHIVOS CON PHP
    
    PHP  tiene varias funciones para crear, leer, actualizar y editar archivos.
    
    Se debe tener precaución al manipular archivos. cuando se manipulen archivos se debe ser muy cuidadoso. Se puede generar una gran cantidad de daño cuando se hace algo mal, los errores más comunes son: editar erroneamente un archivo, llenar el disco duro de archivos basura, y eliminar  contenido de un archivo por accidente.
    
    +++++++++++++++ Función readfile() de PHP ++++++++++++++++++
    Esta función lee un archivo y lo escribe en el bufér de salida.
    A continuación se va a leer el archivo llamado webdictionary.txt, almacenado en las carpetas del servidor.
    
    El código PHP lee el archivo y lo escribe en el bufér de salida, la función entregará el número de bytes de salida si es leído con exito.
    */
    echo readfile("webdictionary.txt");
    # la función readfile() es usada si se quiere abrir un archivo y leer su contenido.
    ?>
</body>
</html>
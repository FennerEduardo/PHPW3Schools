<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear y escribir archivos con PHP</title>
</head>
<body>
    <h1>Crear y escribir archivos con PHP</h1>
    <?php
    /*
    +++++++++++ Crear un Archivo - función fopen() +++++++++++++
    
    Esta función tabién permite ser usada para crear un archivo, tal vez sea un poco confuso, pero en PHP, un archivo es creado usando la misma función que se usa para abrirlos.
    
    Sí se usa la función fopen() en un archivo que no existe, Esta lo creará, dado que el archivo es abierto para escribir (w) o actualizarlo (a).
    
    En el siguiente ejemplo se creará un archivo llamado "testfile.txt". the archivo será creado en la misma carpeta donde el código PHP este ubicado.
    
    $myfile = fopen("testfile.txt", "w");
    
    +++++++++++ Permisos de archivos en PHP +++++++++++++
    
    Sí encuentra errores cuando intente ejecutar este código, debe revisar los permisos que tiene PHP para escribir en el disco duro.
    
    +++++++++++ Escribir un archivo - función fwrite() +++++++++++++
    
    Está función es usada para escribir en un archivo
    
    El primer párametro de fwrite() contiene el nombre del archivo y el segund párametro es la cadena que se va a escribir.
    
    En el ejemplo se escriben una pareja de nombre dentro de un archivo llamado "newfile.txt":
    */  
    
    $myfile = fopen("newfile.txt", "w") or die ("Unable to open file!");
    $txt = "Fenner González \n";
    fwrite($myfile, $txt);
    $txt = "Lina Peña\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    #Nota: Notése que se ha escrito el archivo "newfile.txt" dos veces. Cada vez se ha enviado un texto en la variable $txt, el primero contiene el nombre Fenner gonzález y el segundo Lina Peña. Después de haberlo escrito el archivo se cierra mediante la función fclose().
    
    /*
    +++++++++++ ESobre escribiendo un archivo - función fwrite() +++++++++++++
    
    Ahora que el archivo "newfile.txt" contiene algo de información, se puede mostrar lo que sucede cuando se abre para escritura un archivo ya existente. Toda la información existente será borrada y se comenzará con un archivo vacío.
    
    En el ejemplo se sobreescribirá el archivo "newfile.txt":
    */
    
    $myfile = fopen("newfile.txt", "w") or die ("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    # Cuando se abre el archivo se puede notar como ha cambiado la información correspondiente.
    ?>
    
</body>
</html>
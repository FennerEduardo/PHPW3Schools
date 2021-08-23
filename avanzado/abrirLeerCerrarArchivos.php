<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Abrir, Leer y Cerrar archivos con PHP</title>
</head>
<body>
    <h2>Abrir, Leer y Cerrar archivos con PHP</h2>
    <?php
        /*
        ++++++++++++++ Abrir archivos - Función  fopen() ++++++++++++++++
        
        El mejor método para abrir archivos es con la función fopen(), esta función entrega más opciones que la función readfile().
        
        Usaremos el mismo archivo "webdictionary.txt" durante las lecciones.
        
        El primer párametro de fopen() contiene el nombre del archivo que va a ser abierto y el segundo párametro especifica en que modo debe ser abierto. en el  siguiente ejemplo también se genera un mensaje si la función fopen() es incapaz de abrir el archivo específicado: 
        */
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
    
        /*
        Las funciones fread() y fclose() se explicarán más adelante.
        
        El archivo puede ser abierto en uno de los siguientes modos:
        
            r - abre un archivo para solo lectura. El cursor inicia en el  principio del archivo.
            
            w - abre el archivo para escritura solamente. Borra el contenido del archivo o crea un nuevo archivo si este no existe. el cursor inicia al principio del archivo.
            
            a - abre un archivo para escritura solamente. Los datos existentes en el archivo se conservan. el cursor inicia al final del archivo. También crea un nuevo archivo si no existe.
            
            x - Crea un nuevo archivo para solo escritura. Retorna un valor falso y un error si el archivo ya existe.
            
            r+ - Abre un archivo para lectura y escritura. El cursor del archivo inicia el principio del archivo.
            
            w+ - Abre un archivo para lectura y escritura. Borra el contenido del archivo o crea un nuevo archivo si este no existe. El cursor inicia al principio del archivo.
            
            a+ - Abre un archivo para lectura y escritura. Los datos existentes en el archivo se conservan. El cursor inicia al final del archivo. Crea un nuevo archivo en caso de que este no exista.
            
            x+ - Crea un nuevo archivo para lectura y escritura. Retorna un valor falso y un error si el archivo ya existe.
            
        ++++++++++++++ Leer archivos - Función  fread() ++++++++++++++++
        
        Esta función lee un archivo abierto.
        
        El primer párametro de la función fread() contiene el nombre del archivo a leer y el segundo párametro especifica el número máximo de bytes a leer.
        
        el siguiente código lee el archivo "webdictionary.txt" hasta el final:
        fread($myfile,filesize("webdictionary.txt"));
        
        ++++++++++++++ Cerrar archivos - Función  fclose() ++++++++++++++++
        
        Esta funciónes usada para cerrar un archivo abierto. Es una buena práctica de programación cerrar todos los archivos después de usarlos. Un archivo abierto corriendo en el servidor suele consumir recursos.
        
        La función fclose() requiere el nombre del archivo o una variable que lo almacene, para cerrarlo, como se muestra a continuación:
        
        $myfile = fopen("webdictionary.txt", "r");
        //some code to be executed...
        fclose($myfile);
        
        ++++++++++++++ Leer una línea de un archivo - Función  fgets() ++++++++++++++++
        
        Esta función es usada para leer una línea de un archivo. En els iguiente ejemplo se muestra la primera línea del archivo "webdictionary.txt":
        */
    echo "<hr>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    
        /*
        Nota: Después de llamar la función fgets(), el cursor se ubica en la siguiente línea.
        
        ++++++++++++++ Comprobar el final de un archivo - Función  feof() ++++++++++++++++
        
        Esta función comprueba sí se ha alcanzado el final de un archivo.
        Está función es usada para crear ciclos a través de archivos con longitud desconocida.
        
        en el siguiente ejemplo lee el archivo "webdictionary.txt" línea por línea hasta llegar a final del archivo. (Check End-Of-File)
        */
    echo "<hr>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    #Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    
    /*
    ++++++++++++++ Leer un solo carácter - Función  fgetc() ++++++++++++++++
    
    Esta función es usada para leer un caracter de un archivo. en el ejemplo vamos a leer los carácteres uno a uno hasta el final del archivo que hemos venido usando.
    */
    echo "<hr>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //Output one character until end-of-file
    while(!feof($myfile)) {
        echo fgetc($myfile);
        echo "<br>";
    }
    fclose($myfile);
    
    #Nota: Después de llamada la función fgetc(), el cursor se ubica después del siguiente carácter.
    ?>
    
</body>
</html>
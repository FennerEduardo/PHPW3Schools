<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cargando Archivos con PHP</title>
</head>
<body>
    <h1>Cargando Archivos con PHP</h1>
    
    <?php
    /*
    ++++++++++++++  Cargar archivos con PHP  ++++++++++++++
    
    Con  PHP subir archivos a un servidor es bastante fácil, sin embargo también pueden venir archivos peligrosos, por eso siempre se debe tener cuidado al cargar archivos.
    
    ++++++++++++++  Configurar el archivo "php.ini"  ++++++++++++++
    
    Primero se debe asegurar que PHP este configurado para permitir la subida de archivos.
    En su archivo "php.ini", busque la directiva para file_uploads y configurela en On,se encuentra ubicada en la carpeta principal de su servidor.
    
    Para realizar el ejemplo primero se va a crear un formulario HTML con las condiciones necesarias para subir un archivo de imagen a un directorio especifico en el servidor. Luego se creará el script  explicado bloque por bloque en un archivo llamado  "upload.php"
    
    Primero el Formulario:
    */
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Select image to upload:</p>
        <input type="file" name="fileToUpload" id="fileToUpload" ><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    
    <!--Algunas reglas para el formulario:
    
    1. Asegurarse que el formulario use el método "post".
    
    2. El formulario también necesita  el siguiente atributo: "multipart/form-data". Esto específica que tipo de contenido se va a usar cuando genere la acción en el formulario.
    
    3. El atributo type = "file" de la etiqueta <input> muestra el campo de entrada como un control de selección de archivos, con un botón "Examinar" junto al control de entrada.
    
    El formulario llamará la acción upload.php enviando los datos a través suyo.
     
      -->
</body>
</html>
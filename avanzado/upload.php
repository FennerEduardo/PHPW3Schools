<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cargando Archivo de Imagén</title>
</head>
<body>
    <h2>Su archivo se está subiendo</h2>
    <?php
    /*
    +++++++++++ Creación y explicación del archivo de subida +++++++++
    */
    $target_dir = "uploads/"; # Especifica la carpeta  donde se alamacenará el archivo.
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); #Especifica la ruta del archivo a cargar.
    $uploadOK = 1; 
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));# alamcena la extensión del archivo en minúsculas.
    //Se verifica si la imagen es un archivo de imagen verdadero o falso
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image. ";
            $uploadOk = 0;
        }
    }
    #Para esto se debe tener en cuenta que se debe tener creado el directorio o carpeta donde se va a almacenar el archivo para este caso es uploads, en la misma ruta donde se ejecuta el Script.
    
    #Revisar si el archivo ya  existe
    if(file_exists($target_file)){
        echo "Sorry, file already exists";
        $uploadOk = 0;
    }
    
    #Restringir y/o Revisar el tamaño del archivo
    if($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large. ";
        $uploadOk = 0;
    }
    #Permitiendo  algunos formatos para el archivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    #Revisando la variable de validación $uploadOk, Si está en 0 por un error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        #Sí todo está bien se intentará subir el archivo 
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded";
        } else {
            echo "Sorry, there was an error uploading your file. ";
        }
    }
    ?>
</body>
</html>
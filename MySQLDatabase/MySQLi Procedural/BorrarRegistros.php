<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Registros PHP y MySQL</title>
</head>
<body>
    <?php
    
    /*Para eliminar datos de una tabla se usa la sentencia:
    
    DELETE FROM table_name
    WHERE some_column = some_value
    
    La palabra WHERE  en la sentencia DELETE, especifica cual registro o registros se van a eliminar, si se omite elimina todos los registros.
    
    S continuación eliminaremos el registro con el id = 3 de la tabla MyGuests:
    */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB2";
        
    #crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    #revisar conexión 
    if (!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    }
     #sql para borrar registro
    $sql = "DELETE FROM MyGuests WHERE id=3";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record delete successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
     mysqli_close($conn);
    
    ?>
</body>
</html>
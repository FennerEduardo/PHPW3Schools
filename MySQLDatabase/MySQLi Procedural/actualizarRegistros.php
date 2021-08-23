<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registros con PHP y MySQL</title>
</head>
<body>
    <?php
    /*
    Actualizar datos en una tabla 
    
    La sentencia UPDATE se usa para actualizar los registros de una tabla
    
    UPDATE table_name
    SET column1=value, column2, ...
    WHERE some_column=some_value
    
    Para la sentencia UPDATE el WHERE especifica cuál registro o registros se van a actualizar, si se omite todos los registros se actualizan.
    */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB2";
    
    #Crear conexión 
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    #revisar conexión 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
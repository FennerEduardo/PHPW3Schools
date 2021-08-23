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
    $dbname = "myDB";
    
    #Crear conexión 
    $conn = new mysqli($servername, $username, $password, $dbname);
    #revisar conexión 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ". $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>
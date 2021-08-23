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
    $dbname = "myDBPDO";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        #Establece el modo de error PDO para excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
        #preparar sentecia 
        $stmt = $conn->prepare($sql);
        #ejecutar la sentencia
        $stmt->execute();
        
        #se imprime le mensaje de registro actualizado
        echo $stmt->rowCount(). " records UPDATE successfully";
        }
    catch(PDOPException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
    ?>
</body>
</html>
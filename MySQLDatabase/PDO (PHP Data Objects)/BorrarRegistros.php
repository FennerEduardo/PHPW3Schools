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
    $dbname = "myDBPDO";
        
    
    try {
        $conn =  new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         #sql para borrar registro
        $sql = "DELETE FROM MyGuests WHERE id=3";
        
        #USAMOS exec() porque los resultados no son retornados
        $conn->exec($sql);
        echo "Record deleted successfully";
        }
    catch(PDOException $e)
    {
        echo $sql . "<br> . $e->getMessage()";
    }
    
    $conn = null;
    
    
    
    
    ?>
</body>
</html>
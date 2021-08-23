<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Datos con PHP y MySQL</title>
    <style>
        table, th, td {
         border: solid 1px black;  
        }
        
    </style>
</head>
<body>
    <?php
   /* Para seleccionar datos en MySQL se usa la sentencia:
    
    SELECT column_name(s) FROM table_name
    
    O se puede usar el * para seleccionar todas las columnas de una tabla:
    
    SELECT * FROM table_name
    
    En el siguiente ejemplo se selecciona las columnas ID, firstname y lastname
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
    
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        #salida de datos por cada columna
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
        }
        echo "</table>";
    } else {
        "0 results";
    }
    $conn->close();
    /*
    Explicación del código:
    
    Primero, se establece y carga una sentencia SQL en la variable $sql, con las columnas a seleccionar de la tabla MyGuests. En la siguiente línea de código se ejecuta la busqueda y se ponen los resultados en una variable llamada $result.
    La función num_rows() revisa si el busqueda arrojó más de cero columnas.
    
    Si hay más de cero columnas, la función fetch_assoc() pone todos los resultados en un arreglos asociado, el cual podemos ver con la ejecución de un ciclo. El ciclo while() recorre los resultados entregados y los entrega en pantalla a través del echo.
    */
    ?>
</body>
</html>
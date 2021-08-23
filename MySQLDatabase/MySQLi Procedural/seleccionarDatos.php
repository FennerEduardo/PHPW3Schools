<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Datos con PHP y MySQL</title>
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
    $dbname = "myDB2";
    
    #Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    #revisar conexión 
    if (!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        #Salida de datos por cada columna
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    /*
    Explicación del código:
    
    Primero, se establece y carga una sentencia SQL en la variable $sql, con las columnas a seleccionar de la tabla MyGuests. En la siguiente línea de código se ejecuta la busqueda y se ponen los resultados en una variable llamada $result.
    La función num_rows() revisa si el busqueda arrojó más de cero columnas.
    
    Si hay más de cero columnas, la función fetch_assoc() pone todos los resultados en un arreglos asociado, el cual podemos ver con la ejecución de un ciclo. El ciclo while() recorre los resultados entregados y los entrega en pantalla a través del echo.
    */
    ?>
</body>
</html>
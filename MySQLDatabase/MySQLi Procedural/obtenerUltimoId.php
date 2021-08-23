<?php
/*Después de que una base de datos y una tabla han sido creadas, podemos insertarles información.
    
Aquí algunas reglas de sintáxis a seguir:

- Las sentencias SQL deben ir en comillas en PHP.
- Los valores de cadenas de texto dentro de la sentencia SQL deben ir en comillas.
- Los valores númericos no deben ir entre comillas.
- La palabra NULL tampoco debe ir entre comillas.

La sentencia INSERT INTO es usada para agregar nuevos registros a una tabla de MySQL:

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3,...)

Vamos a llenar los campos de la tabla que creamos en el capítulo anterior.

Nota: Sí una columna tiene AUTO INCREMENT o TIMESTAMP, está no necesita ser especificada en la sentencia SQL, ya que MySQL les agregará automáticamente su valor.
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

#ejecución y prueba de sentencia de inserción
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Fenner', 'González', 'fenner@example.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
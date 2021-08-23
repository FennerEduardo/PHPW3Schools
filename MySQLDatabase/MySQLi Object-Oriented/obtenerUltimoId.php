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
$dbname = "myDB";

#Crear Conexión 
$conn = new mysqli($servername, $username, $password, $dbname);
#revisar conexión 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#sentencia sql de inserción
$sql= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Fenner', 'González', 'fenner@example.com')";

#ejecutar y revisar la sentencia
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "new record created successfully. Last ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();






?>
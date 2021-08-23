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
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    #establecer el modo de error PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #eJECUCIÓN Y PRUEBA DE SENTENCIA DE INSERCIÓN
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Fenner', 'González', 'fenner@example.com')";
    #se usa la función exec() ya que los resultados no son retornados.
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
catch (PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;

 


?>
<?php
/*Para ejecutar múltiples declaraciones de SQL, debe usarse la función mysqli_multiquery(), en el siguiente ejemplo se hace la inserción de 3 registros en la tabla "MyGuests":*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
#crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
#REvisar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Jorge', 'González', 'jorge@example.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Marlen', 'Castellanos', 'marlen@example.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Ed', 'González', 'ed@example.com');";

 if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();
#Cada SQL debe ir separada por punto y coma. también se debe concatenar cada variables $sql con un punto antes del igual.

?>



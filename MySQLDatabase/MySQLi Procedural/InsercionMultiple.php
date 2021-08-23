<?php
/*Para ejecutar múltiples declaraciones de SQL, debe usarse la función mysqli_multiquery(), en el siguiente ejemplo se hace la inserción de 3 registros en la tabla "MyGuests":*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";
#crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
#revisar conexión 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Jorge', 'González', 'jorge@example.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Marlen', 'Castellanos', 'marlen@example.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Ed', 'González', 'ed@example.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
#Cada SQL debe ir separada por punto y coma. también se debe concatenar cada variables $sql con un punto antes del igual.

?>



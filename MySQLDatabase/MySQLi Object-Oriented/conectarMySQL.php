<?php
$servername = "Localhost";
$username = "root";
$password = "";

#Se crea la conexión 
$conn = new mysqli($servername, $username, $password);

#se revisa la conexión 
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
echo "Connected successfully";

/*Note que en ejemplo de arriba: $connect_error fue eliminado desde PHP 5.2.9 y 5.3.0. Sí necesita asegurar la compatibilidad con versiones inferiores a la 5.2.9 y 5.3.0, use el siguiente código en su lugar:

//Se revisa la conexión 
if (mysqli_connect_error()) {
    die("Database connection failed: ". mysqli_connect_error());
}*/

#Cerramos la conexión:
$conn->close();

?>
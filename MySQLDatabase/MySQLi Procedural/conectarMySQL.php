<?php
$servername = "localhost";
$username = "root";
$password = "";

#Crear la conexión  ff 
$conn = mysqli_connect($servername, $username, $password);

#Revisar la conexión 
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";

#Cerramos la conexión 
mysqli_close($conn);
?> 
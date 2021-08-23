<?php
$servername = "localhost";
$username = "root";
$password = "";

#creamos la conexión 
$conn = mysqli_connect($servername, $username, $password);

#revisamos la conexión 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#crear la base de datos
$sql = "CREATE DATABASE myDB2";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
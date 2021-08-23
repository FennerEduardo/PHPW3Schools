<?php
$servername = "localhost";
$username = "root";
$password = "";

#Crear la conexión 
$conn = new mysqli($servername, $username, $password);

#revisar la conexión 
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

#crear la base de datos
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database Created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

/*Nota: Cuando crees una nueva base de datos, debes solo especificar los 3 argumentos del objeto MySQLi (servername, username y password).
    
Tip: Sí tienes un puerto especifico, agrega una cadena vacía en el argumento del nombre de la base de datos, algo como esto:

    new mysqli("localhost", "username", "password", "", port)*/
?>
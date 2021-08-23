<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB",$username, $password);
    #se configura el mode de error PDO para excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

/*Nota: En el ejemplo PDO de arriba, tenemos que también especificar una base de datos, para este caso es myDB. PDO obliga a validar una base de datos para conectar, en caso contrario se lanza la excepción.
    
Tip: Un gran beneficio de PDO es que tiene una clase de excepción para manejar algunos problemas que se puedean presentar con las consultas en nuestra base de datos. Sí una excepción es lanzada dentro de un bloque try {}, el script detiene la ejecución y fluye directamente hasta el primer bloque catch{}. */

#cerramos la conexión:
$conn = null;

?>
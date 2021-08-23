<?php
#Con PDO es un poco distinta la forma de hacer inserción múltiple.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    #establecer el modo de error PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #INICIA LA TRANSACCIÓN
    $conn->beginTransaction();
    #Nuestras sentencias SQL
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Jorge', 'González', 'jorge@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Marlen', 'Castellanos', 'marlen@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Ed', 'González', 'ed@example.com')");
    
    $conn->commit();
    echo "new records created successfully";
    }
catch(PDOException $e)
    {
    #Roll back si algo falla en la transacción
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
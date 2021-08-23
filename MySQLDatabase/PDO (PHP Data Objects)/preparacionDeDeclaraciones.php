<?php
/*

Preparar y enlazar declaraciones y párametros

Una declaración preparada es una característica usada para ejecutar la misma o similar sentencia de SQL repetidamente y altamente eficiente.

La preparación de sentencias básicamente trabaja así:

    1. Preparar: Una plantilla con la sentencia SQL es creada y enviada a la base de datos. Ciertos valores se dejan sin especificar, llamados párametros  etiquetados (Etiqueta: "?"). Por ejemplo: INSERT INTO MyGuests VALUES(?,?,?).
    
    2. la base de datos analiza, compila y realiza la optimización de la plantilla con la sentencia SQL, y almacena el resultado sin ejecutarla.
    
    3. Ejecutar: un tiempo después la aplicación une los párametros a los valores, y la base de datos ejecuta la sentencia. La aplicación puede ejcutar la sentencia cuantas veces quiera con distintos valores.
    
Comparada la ejecución directa de sentencias SQL, con las sentencias preparadas ésta tiene tres grandes ventajas:

    1. Las sentencias preparadas reducen tanto el tiempo de análisis como la preparación de la sentencia y es hecha una sola vez, aunque la sentencia se ejecute en múltiples ocasiones.
    
    2. Enlazar párametros minimiza el ancho de banda al servidor, porque, envias solo los párametros cada vez y no toda la seentencia completa.
    
    3. La preparación de sentencias es muy usada  contra la inyección de código SQL, por los valores están parametrizados, los cuales son transmitidos después usando un protocolo diferente, no necesita ser escapado correctamente. Sí la plantilla de sentencia no se deriva de una entrada externa, no se puede inyectar código SQL.
    
A continuación veremos el ejemplo con sentencias preparadas:
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    #Estableciendo el modo de error PDO para excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    #Preparando y enlazando parámetros SQl
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    
    $firstname = "Lina";
    $lastname = "Peña";
    $email = "lina@example.com";
    $stmt->execute();

    $firstname = "Eicker";
    $lastname = "Peña";
    $email = "eicker@example.com";
    $stmt->execute();

    $firstname = "Diana";
    $lastname = "Peña";
    $email = "diana@example.com";
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOexception $e) 
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

?>
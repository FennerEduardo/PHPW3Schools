<?php
/*
Una tabla de base de datos tiene un nombre propio único y consiste en filas y columnas.

La sentencia CREATE TABLE  es usada para crear tablas en  MySQL

A Continuación vamos a crear una tabla llamada "MyGuests", con 5 columnas "id", "firstname", "lastname", "email" y "reg_date":

CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)

Notas de la tabla de arriba:

El tipo de dato es pecifica que tipo de información  puede almacenar la columna. 
Después del tipo de dato, puedes especificar otros atributos opcionales para cada columna:

- NOT NULL: Cada columna debe contener un valor en dicha columna, los valores nulos o vacíos no son permitidos.

- DEFAULT: valor asignado de manera predeterminada, este llena el campo cuando no se ha insertado información.

- UNSIGNED: usado para campos tipo número, limita el almacenamiento de datos a número positivos y cero.

- AUTO INCREMENT: MySQL automáticamente incrementa el valor del campo en 1 cada ve que se haga una inserción de registro.

- PRIMARY KEY: Usado para identificar de manera unica las columnas de una tabla. la columna PRIMARY KEY se configura usualmente en el número de ID y tambien generalmente se le configura el AUTO INCREMENT.

A continuación un ejemplo para crear tablas con PHP:
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    #establecer el modo de error PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    #Sentencia de creación de tabla
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    
    #usa exec() porque los resultados no retornan
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>





































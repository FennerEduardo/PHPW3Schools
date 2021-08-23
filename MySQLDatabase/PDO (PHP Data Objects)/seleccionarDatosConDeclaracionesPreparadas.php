<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Datos con PHP y MySQL</title>
</head>
<body>
    <?php
   /* Para seleccionar datos en MySQL se usa la sentencia:
    
    SELECT column_name(s) FROM table_name
    
    O se puede usar el * para seleccionar todas las columnas de una tabla:
    
    SELECT * FROM table_name
    
    En el siguiente ejemplo se selecciona las columnas ID, firstname y lastname y se ponen en una tabla de HTML
    */
    echo "<table style='border: solid 1px black'>";
    echo "<tr><th>Id</th><th>Firstname</th>Lastname</th></tr>";
    
    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);   
        }
        
        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }
        
        function beginChildre() {
            echo "<tr>";
        }
        function endChildren() {
            echo "</tr>";
        }
    }
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDBPDO";
    
    #Crear conexión
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $stmt->execute();
        
        #establece los resultados en un arreglo asociativo
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
        }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    /*
    Explicación del código:
    
    Primero, se establece y carga una sentencia SQL en la variable $sql, con las columnas a seleccionar de la tabla MyGuests. En la siguiente línea de código se ejecuta la busqueda y se ponen los resultados en una variable llamada $result.
    La función num_rows() revisa si el busqueda arrojó más de cero columnas.
    
    Si hay más de cero columnas, la función fetch_assoc() pone todos los resultados en un arreglos asociado, el cual podemos ver con la ejecución de un ciclo. El ciclo while() recorre los resultados entregados y los entrega en pantalla a través del echo.
    */
    ?>
</body>
</html>
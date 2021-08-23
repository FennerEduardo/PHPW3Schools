<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MultiArreglos con PHP</title>
</head>
<body>
    <h2>Arreglos múltiples</h2>
    <?php
    /*
    Anteriormente en este tutorial, se han descrito los arreglos como una lista simple de valores y claves en pares.
    En ocasiones, se quieren almacenar valores con más de una clave, a esto se le llaman arreglos multidimensionales.
    
    Arreglos multidimensionales en PHP
    
    Un arreglo multidimensioanl contiene uno o más arreglos.
    
    PHP entiende los arreglos multidimensionales que están dos, tres, cuatro, cinco o más niveles de profundidad, sin embargo los arreglos con más de tres niveles de profundidad son difíciles de manejar parala mayoría de las personas.
    
    La dimensión de un arreglo indica el número de indices que se necesitan para seleccionar un elemento.
    
    1. para un arreglo de dos dimensiones, se necesitan dos indices para seleccionar un elemento.
    2. Para un arreglo de tres dimensiones se necesitan tres indices para seleccionar un elemento.
    
    Para entenderlo mejor vamos a ver la siguiente tabla en HTML:
    */
    ?>
    <table border="1px" >
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>
        <tr>
            <td>Volvo</td>
            <td>22</td>
            <td>18</td>
        </tr>
        <tr>
            <td>BMW</td>
            <td>15</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Saab</td>
            <td>5</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Land Rover</td>
            <td>17</td>
            <td>15</td>
        </tr>
    </table>
    <?php
    /*
    Se pueden almacenar los datos de la tabla enun arreglo de dos dimensiones, como este:
    
    $cars = array
        (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        
    Ahora el arreglo multidimensional $cars contiene cuatro arreglos, y tiene dos indices: fila y columna.
    
    Para acceder a los elementos del arreglo debemos apuntar  los dos indices, es decir a la fila y la columna, como lo veremos a continuación:
    */
    #Definimos el arreglo y sus valores
    $cars = array 
        (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
        );
    #Imprimimos en la pantalla los valores de las posiciones que queremos ver.
    echo "<br>";
    echo $cars[0][0]. ": In stock: ".$cars[0][1]. ", sold: ". $cars[0][2]. ". <br>";
    echo $cars[1][0]. ": In stock: ".$cars[1][1]. ", sold: ". $cars[1][2]. ". <br>";
    echo $cars[2][0]. ": In stock: ".$cars[2][1]. ", sold: ". $cars[2][2]. ". <br>";
    echo $cars[3][0]. ": In stock: ".$cars[3][1]. ", sold: ". $cars[3][2]. ". <br>";
    
    #En este caso el indice para la fila corresponde a las llaves de la izquierda y el de las columnas a la derecha.
    
    /*
    Para hacer más dinámica la manera de mostrar un arreglo multidimensional se puede usar un pa de ciclos For anidados e imprimir uno a uno lo valores teniendo en cuenta los índices, fila y columna. Ejemplo:
    */
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row </b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>
    
</body>
</html>
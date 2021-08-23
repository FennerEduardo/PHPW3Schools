<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Variables Super Globales PHP</title>
</head>
<body>
    <?php
    /*
    VARIABLES SUPER GLOBALES
    
    Fueron introducidas en la versión 4.1.0 de PHP, son variables integradas que siempre están disponibles en todos los alcances del programa.
    
    Cada variable predefinida en PHP es un variabel superglobal, lo que significa que ellas siempre son accesibles independientemente de su alcance y se puede acceder a ellas mediante una función, clase o método sin hacer nada especial.
    
    Las variables superglobales son:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    
    En este capítulo se exlicarán algunas variables super globales y el resto se explicarán en capítulos siguientes.
    
    1. $GLOBALS: Es una variable superglobal de PHP, la cual da acceso global a las variables en cualquier programa de PHP.(También incluídas en métodos o funciones).
    PHP almacena todas las variables en un arreglo llamado $GLOBALS[index]. El índice o index guarda los nombres de las variables.
    En el ejemplo de abajo se muestra como usar las variables super globales:
    */
    $x = 75;//Creamos dos variables de manera normal
    $y = 25;
    
    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];# Usamos las variables globales para almacenar en z el valor tomado de las variables externas a la función y operadas mediante una suma
    }
    addition();#Ejecutamos la función
    echo $z; #Se imprime la variable fuera de la función resultado 100.}
    echo "<br>";
    
    /*
    2. $_SERVER: Es una super global variable de PHP la cual almacena información acerca de encabezados, ubicaciones y lugares del programa. A continuación veremos como usar algunos elementos en $_SERVER:
    */
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; 
    echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['REQUEST_TIME'];
    echo "<br>";
    echo $_SERVER['QUERY_STRING'];
    echo "<br>";
    echo $_SERVER['HTTP_ACCEPT'];
    echo "<br>";
    // echo $_SERVER['HTTP_ACCEPT_CHARSET'];
    echo "<br>";
    // echo $_SERVER['HTTPS'];
    echo "<br>";
    // echo $_SERVER['HTTP_REMOTE_ADDR'];
    echo "<br>";
    // echo $_SERVER['HTTP_REMOTE_HOST'];
    echo "<br>";
    // echo $_SERVER['HTTP_REMOTE_PORT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo $_SERVER['SERVER_ADMIN'];
    echo "<br>";
    echo $_SERVER['SERVER_SIGNATURE'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    // echo $_SERVER['PATH_TRANSLATED'];
    echo "<br>";
    // echo $_SERVER['SCRIPT_URI'];
    echo "<br>";
    #Algunas de las anteriores variables no arrojan resultados o aparecen como indefinidas, esto se debe a que se ejecute el script en un ambiente de prueba o servidor local, también dependerá del servidor y la versión de PHP para que todas estén funcionando. */
    
    /*
    3. $_REQUEST: Esta variable es usada para recolectar datos después de usar un formulario HTML.
    En el siguiente ejemplo se muestra un formulario con una entrada de texto y un botón de enviar. cuando el usuario usa el botón dando clic en enviar, el formulario envia estos datos a un archivo especificado en el atributo action de la etiqueta form de HTML. Para este ejemplo se procesará la información en el mismo archivo de PHP, si se desea que el procesamiento de la información se haga en otro archivo se debe reemplazar el nombre de archivo. Entonces se puede usar la variable super global $_REQUEST para recolectar la información pusta en la entrada de texto:
    */
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        #tomamos la información del campode entrada
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty <br>";
        } else {
            echo $name. '<br>';
        }
    }
    /*
    PHP $_POST: en el ejemplo anterior se usa el método POST para recoger la información del formulario e imprimirla en pantalla. Este método es ampliamente usado para esta operación y también para pasar los valores obtenidos a las variables de un programa, esta información se envia de manera privada así que es un método más seguro a la hora de guardar información privada de un formulario. Esto se verá más adelante cuando se trabajen formularios.
    
    PHP $_GET: Este método también es ampliamente usado para recolectar información de un formulario. La gran diferencia con el post es que el método GET, recoge la información y la envia a través de la URL. Para ejemplificar el funcionamiento se va a crear un archivo con un echo, el cuál se ejecutará una vez se le clic a un enlace en la página. Cuando se realiza la prueba se puede ver en la URL los datos que se han puesto en las variables subject y web:
    http://localhost/PHPw3Schools/test_get.php?subject=PHP&web=W3school.com
    */
    ?>
    <a href="test_get.php?subject=PHP&web=W3school.com"> Test $GET</a>
    
</body>
</html>
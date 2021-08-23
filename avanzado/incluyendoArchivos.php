<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Incluyendo Archivos con PHP (include o require)</title>
</head>
<body>
    <h2>Incluyendo archivos con PHP</h2>
    <?php
    /*
    La declaración include o require toma todo el texto/código/marcado que existe en un archivo especifico y lo copia dentro del archivo que está usando la sentecia include.
    
    Incluir achivos es muy usado cuando se quiere usar el mismo código PHP,HTML o texto en múltiples páginas de un sitio web.
    
    LA DECLARACIÓN include Y  require DE PHP
    
    Es posible insertar el contenido de un archivo de PHP dentro de otro archivo (antes de que el servidor lo ejecute) con la sentencia include o require.
    
    El include y el require son idénticos, excepto en caso de fallo:
        require: produce un error fatal (E_COMPILE_ERROR) y detiene el programa o script
        include: solo produce una advertencia (E_WARNING) y el programa o script sigue funcionando.
    
    Entonces, si se quiere que la ejecución continue y muestre a los usuarios la salida, incluso si falta el archivo incluído, se debe usar la sentencia include. De otra manera, en el caso de un Framework, CMS o una aplicación completa de PHP, siempre se debe usar la sentencia require  para incluir el archivo clave y que fluya la ejecución. Esto ayudar a evitar que se vea comprometida la seguridad de la aplicación y la integridad, solo en caso de que por accidente se pierda el archivo clave.
    
    Incluir archivos evita una gran cantidad de trabajo. Esto significa que se puede crear un header, footer, o menú estándar para usar en todas las páginas web. Entonces sí  el header necesita ser actualizado, solo se actualiza el header del archivo incluído.
    
    Sintáxis:
        include 'filename';
        
        o 
        
        require 'filename';
        
    Para el siguiente ejemplo se va a crear un archivo llamado footer.php, con el siguiente código:
    
    <?php 
        echo "<p>Copyright &copy; 1999-" . date("Y") . "Fenner </p>";
    
    ?>
    
    Y se va a incluir este footer en una página llamada ejemploinclude.php mediante la declaración include, el código completo es el siguiente:
    
    <html>
        <body>
            <h1>Welcome to my home page!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vel aspernatur, illo harum laboriosam voluptate. Odio officia excepturi modi tempora obcaecati sapiente inventore, cum perferendis. Nemo tempora deleniti reiciendis quis.</p>
            <p>Lorem ipsum dolor.</p>
            <?php include 'footer.php'; ?>
        </body>
    </html>
    
    Para el ejemplo 2 se creará un archivo llamado menu.php y lo vamos a incluir, en el mismo archivo de ejemploinclude.php, los código quedarán así:
    
    <?php
        echo '<a href="#">Home</a>
        <a href="#">HTML Tutorial</a>
        <a href="#">CSS Tutorial</a>
        <a href="#">JavaScript Tutorial</a>
        <a href="#">PHP Tutorial</a>';
    ?>
    
    todas las páginas del sitio Web deben usar este archivo de menú, Así es como se puede usar (Se usará un elemento div el cual se puede estilizar facilmente con CSS), quedando el código final así:
    
    <html lang="es">
    <body>
        <div class="menu">
            <?php include 'menu.php' ?>
        </div>
            <h1>Welcome to my home page!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vel aspernatur, illo harum laboriosam voluptate. Odio officia excepturi modi tempora obcaecati sapiente inventore, cum perferendis. Nemo tempora deleniti reiciendis quis.</p>
            <p>Lorem ipsum dolor.</p>
        <?php include 'footer.php'; ?>
    </body>
    </html>
     
    El ejemplo 3, se va a ejecutar en esta misma página llamando un archivo de nombre vars,php con la sentencia include:    */
    ?>
    <h2>Usando el archivo vars.php</h2>
    <?php
        include 'vars.php';
        echo "I have a $color $car.";
    
    /*
    Una de las grandes diferencias entre el require y el include es el hecho de que el require detiene el include y da un error fatal si no se encuentra el archivo que se está llamando medainte la sentencia, se van a crear dos archivos para mostrar esta diferencia con los nombres usorequire.php y usoinclude.php, los dos archivos tendrán el mismo código pero se cambiarán las sentencias de inclusión y en la ejecución se mostrará la diferencia. el código es el siguiente: 
    
    ++++++++++++++++++++ Para el include +++++++++++++++++
    
    <html lang="es">
        <body>
            <h1>Usando include</h1>
                <?php
                include 'noFileExists.php';
                echo "I have a $color $car.";
                ?>
        </body>
        </html>
        
        
    ++++++++++++++++ Para el require +++++++++++++++++++++
    
    <html lang="es">
        <body>
            <h1>Usando Require</h1>
                <?php
                require 'noFileExists.php';
                echo "I hace a $color $car.";
                ?>
    </body>
    </html>
    
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
    Una vez se ejecutan los archivos la diferencia se evidencia en el echo.
    
    Usar require cuando el archivo es obligatorio para la aplicación, por ejemplo una conexión a la base de datos.
    
    Usar include cuando el archivo no es obligatorio y la aplicación debe continuar cuando el archivo no se encuentre, por ejemplo al llamar variables de un formulario.
    */
    ?>
</body>
</html>
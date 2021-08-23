<!DOCTYPE html>
<?php
session_start();# se inicializa la sesión
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesiones con PHP</title>
</head>
<body>
    <h1>Sesiones con PHP</h1>
    <?php
    /*Una sesión es una forma de almacenar información (En variables) para ser usada a través de mútiples páginas.
    
    A diferencia de la cookie la información no es almacenada en el computador del usuario.
    
    +++++++++ ¿Qué es una sesión en PHP? ++++++++++++++
    
    Cuando trabajas en una aplicación, la abres, haces algunos cambios y luego la cierras. Esto es lo que se conoce como una sesión. El computador conoce quién eres, él sabe cuando iniciaste la aplicación y cuando la finalizaste, pero en internet esto es un problema: el servidor web no conoce quién eres o qué haces, porque la dirección HTTP no mantiene tu estado.
    
    Las variables de sesión resuelven este problema almacenando la información de usuario para ser usada a través de múltiples páginas (Ejemplo: nombre de usuario, color favorito, etc.), por defecto las variables de sesión están disponibles hasta que el usuario cierre el navegador.
    
    Entonces, las variables de sesión guardan información acerca de un usuario simple y está está disponible en todas las páginas de la aplicación.
    
    Sí necesitas alamcenar información permanentemente, debes usar una base de datos.
    
    +++++++++ Inicializar un sesión en PHP ++++++++++++++
    
    Una sesión se inicia con la función session_start().
    
    Las variables de sesión son configuradas con una variable global de PHP: $_SESSION.
    
    Ahora, vamos a configurar las variables de sesión en está página, para ello debes tener en cuenta ue al igual que las cookies, la sesión debe inicializarse ANTES de la etiqueta <html>, justo como aparece en este archivo:
        
    <!DOCTYPE html>
    <?php
        session_start();# se inicializa la sesión
    ?>
    <html lang="es">
    
    AHORA SE CONFIGURAN LAS DOS VARIABLES DE SESIÓN A USAR
    */
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set";
    ?>
</body>
</html>
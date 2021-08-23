<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validando formularios con PHP</title>
</head>
<body>
    <?php
    /*
    VALIDANDO FORMULARIOS CON PHP
    Validar los formularios con PHP es muy importante ya que protegen la información de hackers y spammers.
    
    El formulario HTML que se trabajará en este capítulo, contiene varios campos obligatorios y opcionales, así como botones tipo radio, cajas de texto y el botón de enviar.
    
    Las reglas de validación son las siguientes:
    
    Name: Requerido + Solo debe contener letras y espacios en blanco.
    E-mail: Requerido + Solo debe contener una dirección de correo valida con @ y .
    Website: Opcional, si se diligencia debe contener una URL valida.
    Comment: Opcional, Entrada multilínea en un campo de texto.
    Gender: Requerido + Se debe seleccionar uno.
    
    Primero se explica el código HTML para el formulario.
    
    Name, email y website son entradas de texto, y el campo  comment es un area de texto:
    
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    
    Genero es un botón tipo radio:
    
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    
    Para el formulario el código es el siguiente:
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    Cuando el formulario es enviado, los datos del formulario son enviados por el método "post".
    
    ¿Qué es la variable $_SERVER["PHP_SELF"] ?
        Está variable super global retorna el nombre de archivo del archivo actual, es decir ejecuta el código sin llamar un archivo externo. No es recomendable retornar información de formularios en la misma página.
        
    ¿Cuál es la función htmlspecialchars() ?
        Esta función convierte los carácters especiales a entidades de HTML, esto significa que reemplazará carácteres de HTML como < y > con &lt; y &gt;. Esto previene ataques  de inyrección de código HTML o JavaScript en los formularios.
        
    Para validar los datos con PHP:
    
        lo primero es pasar todas las variables por la función htmlspecialchars () de PHP. esta función convierte cualquier tipo código html qu ese pudiera ingresar en los campos en entidades, evitando así la inyección de código en el sitio web.
        
    */
    #Se definen las variables  se configurna con valores vacíos
    $name = $email = $gender = $comment = $website = "";
    if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Formulario validado</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name"><br><br>
        E-mail:<input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "<h2> Your input: </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    
    ?>
</body>
</html>
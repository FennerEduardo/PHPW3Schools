<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Validando Email y URL</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    /*
    En este capítulo se verá como validar nombres, emails y URLS en un formulario
    
    VALIDANDO NOMBRE
    
    el siguiente código muestra una forma simple de revisar si el campo de nombre (Textos en general), contiene letras y espacios en blanco. Sí el valor del campo no es válido, entonces se almacena un mensaje de error:
    
    Código:
    
    $name =$test_input($_POST["name]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)){
    $name = "Only letters and white space allowed";
    }
    
    La función preg_match() busca una cadena por patrón, retornando true si los patrones existen y falso si se da el caso al contrario.
    
    VALIDANDO EMAIL
    
    La forma más segura y fácil para revisar que cualquier dirección de email este bien conformada es con la función filter_var().
    En el siguiente código, sí el email no tiene una estructura correcta, entonces se almacena un mensaje de error.
    
    Código:
    
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr = "Invalid email format";
    }
    
    VALIDANDO URL
    
    En el siguiente código se muestra la forma para verificar que una dirección URL tenga una sintáxis correcta (Está expresión también permite guión en la URL). sí la dirección URL tiene una sintáxis no valida, entonces almacena un mensaje de error.
    
    Código:
    
    $website = test_input($_POST["website]);
    if (!preg_match("/\b(?:(https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[a-z0-9+&@#\/%=~_|]/i", $website)) {
    $websiteErr = "Invalid URL";
    }
    
    A continuación veremos el formulario con la validación de name email y URL:
    */
    
    #Variables vacías y definidas
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else{
            $name = test_input($_POST["name"]);
            #Se revisa si la variable contiene letras y espacios en blanco
            if (!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
            #Se revisa que el email sea valido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
            }  
        }
        if (empty($_POST["website"])){
            $website = "";
        } else {
          $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
            }  
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }    
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Formulario con validación y campos obligatorios</h2>
    <p><span class="error">* required field </span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        Website: <input type="text" name="website"><span class="error"> <?php echo $websiteErr; ?></span><br><br>
        Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
</body>
</html>
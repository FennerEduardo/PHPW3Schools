<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios con Campos requeridos</title>
    <style>
        .error{
            color: #ff0000;
        }
    </style>
    
</head>
<body>
    <?php
    /*En el capítulo anterior, todos los campos del formulario eran opcionales.
    
    En el siguiente código, se han sumado algunas variables nuevas: $nameErr, $emailErr, $genderErr y $websiteErr, Estas variables de ellos almacenarán mensajes de error para los campos obligatorios. También se agrega una condición is else para cada varibles $_POST. Esto revisa si la variable está vacía mediante la función empty() de PHP. Sí está vacío el campos cada variable almacena un mensaje de error, si no está vacío, envía ls datos apra que sean pasados por la función test_input().
    
    El código HTML, también se agregaron pequeños segmentos de código PHP después de cada campo requerido, éstos generan un mensaje de error si es necesario, cuando el usuario intenta enviar los el formulario con los campos vacíos.
    
    Tambipen se agrega la clase error con CSS para darle el color a cada mensaje de error generado.
    */
    
    # Se definen las variables y se configuran vacías:
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }
        else {
            $name = test_input($_POST["name"]);
        }
   
    
        if (empty($_POST["email"])) {
            $emailErr = "E-mail is required";
        }
        else {
            $email = test_input($_POST["email"]);
        }
    
        if (empty($_POST["website"])){
        $website = "";
        }
        else {
        $website = test_input($_POST["website"]);
        }
        
        if (empty($_POST["comment"])){
        $comment = "";
        }
        else {
        $comment = test_input($_POST["comment"]);
        }
    
    

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        }
        else {
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
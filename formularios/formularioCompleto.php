<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Completo</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <h2>Formulario Completo</h2>
    <?php
    /*
    Para finalizar y complementar el formulario, se le han hecho las siguientes modificaciones:
    
    1. Para mostrar los valores digitados en cada una de las entradas se agrego un pequeño código con un echo que muestra el valor almacenado en cada variable, éste se agrego al atributo value.
    
    2. Para mostrar el texto escrito en el comentario se agrega un script de PHP en medio de las etiquetas textarea mostrando el valor almacenado en dicha variable.
    
    3. También se necesita conocer cuál de las entradas tipo radio fue seleccionada, para eso se debe manipular el atributo checked mediante un script y una condición.

    
    A continuación veremos el formulario completo:
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
            if (!preg_match("/^[a-zA-Z ]*$/", $name)){
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
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email ?>">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        Website: <input type="text" name="website" value="<?php echo $website ?>"><span class="error"> <?php echo $websiteErr; ?></span><br><br>
        Comment: <textarea name="comment" id="" cols="30" rows="10"><?php echo $comment; ?></textarea><br><br>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
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
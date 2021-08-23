<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tipos de Datos en PHP</title>
</head>

<body>
    <?php
    #en PHp las variables pueden almacenar distintos tipos de ddatos y los diferentes tipos de datos pueden hacer cosas diferentes. Se soportan llos siguientes tipos de datos:
    /*
    String - cadenas de carácteres
    Integer - enteros
    Float - decimales también conocidos como doubles en otros lenguajes.
    Boolean - Boleanos falso o verdadero
    Array - Arreglos o vectores
    Object - Objetos
    NULL - Nulos
    Resource - Recursos
        */
    # String o cadenas: pueden ir dentro de comillas sencillas o dobles, por ejemplo:
    $x = "Hello world!";
    $y = 'Hello world!';
    echo $x;
    echo "<br>";
    echo $y;

    #Enteros sin decimales pueden ir desde -2,147,483,648 hasta 2,147,483,647.
    /* 
    un entero debe tener al menos un digito 
    los enteros no pueden tener punto decimal
    un entero puede ser negativo o positivo
    los enteros pueden de tres formatos especificos: decimal, hexadecimal(prefijo 0x) u octal (prefijo con 0)
    Enl siguiente ejemplo la variable x tiene un número entero y con la función var_dump() retorna el tipo de dato y su valor:    
    */
    $x = 5985;
    var_dump($x);

    /*
    float es un tipo de número en su forma decimal, este puede llevar el punto para mostrar las unidades a la derecha, un ejemplo a continuación:
    */
    $x = 10.365;
    var_dump($x);

    /*
    Booleanos son valores que dan valores verdadero o falso y se usan para condiciones de decisión o testeo:
    */
    $x = true;
    $y = false;
    //Su uso se verá más adelante en el capitulo de condicionales

    #Arreglos son distintos valores almacenados en una variable simple, en el siguiente ejemplo de evalua una variable con arreglo:
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";
    #Objetos: un objeto es un tipo de dato que almacena datos e información para ser procesados después. en PHP un objeto debe ser declarado de manera muy explicita.
    #Primero declaramos una clase de objeto, para esto usamos la palabra clave class. una clase es una estructura que puede contener propiedades y métodos. Ejemplo:

    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    #Se crea un objeto 
    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    #mostramos las propiedades del objeto
    echo $myCar->model . "<br>";

    /*
    Valores nulos: son tipos de datos que solo pueden tener el valor NULL, una variable NULL es aquella a la que no se le ha asignado un valor, si se crea una variable sin asignarle un valor determinado lo asumirá como null.
    */
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    /*
    
    Los recursos son tipos de datos especiales, estos hacen referencia a funciones y recursos externps a PHP.
    Un ejemplo compun son los recursos usados en un llamaod a una base de datos.
    En este capitulo no se hablará del tema ya que es un tema avanzado.*/

    ?>
</body>

</html>
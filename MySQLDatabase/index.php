<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>My SQL DataBase And PHP</title>
    <style>
        body{
            font-family: sans-serif;
            width: 60%;
            margin: 0 auto;
            text-align: justify;
        }
        h1, h2, h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>PHP Base de datos</h1>
    <p>Con PHP puedes concectar y manipular bases de datos.</p>
    <p>MYSQL es el sistema de base de datos más usado con PHP</p>
    <h2>¿Qué es MySQL?</h2>
    <ul>
        <li>Es un sistema de bases de datos usado en la web</li>
        <li>Es un sistema de bases de datos que corre o se ejecuta en un servidor</li>
        <li>Es ideal para aplicaciones grandes y pequeñas</li>
        <li>Es muy rápido, de confianza y fácil de usar</li>
        <li>usa estándares de SQL</li>
        <li>compila en un número de platafomas</li>
        <li>Es de uso y descarga libre</li>
        <li>Es desarrollado, distribuido y soportado por Oracle Corporation</li>
        <li>Es llamado así por la hija del cofundador Monty Widenius: My</li>
    </ul>
    <p>Los datos en MySQL son almacenados en tablas. Unatabla es una colección de datos, organizada en filas y columnas.</p>
    <p>Las bases de datos son usadas para almacenar información categóricamente, Una empresa puede tener una base de datos con las siguientes tablas:</p>
    <ul>
        <li>Employees</li>
        <li>Products</li>
        <li>Customers</li>
        <li>Orders</li>
    </ul>
    <h2>PHP + El sistema de bases de datos MySQL</h2>
    <ul>
        <li>PHP combinado con MySQL son multiplataforma (También puedes desarrollar en Windows y un servicio de plataforma Unix</li>
    </ul>
    <h3>Consultas de Base de Datos (Queries)</h3>
    <p>Una consulta o querie es una pregunta o solicitud</p>
    <p>Podemos consultar información especifica a una base de datos y tener un conjunto de registros en respuesta</p>
    <p>Obversa la siguiente consulta (Usando el estándar SQL):</p>
    <strong>SELECT LastName FROM Employees</strong>
    <p>La consulta de arriba selecciona todos los datos en la columna "LastName" de la tabla "Employees".</p>
    <h3>Descargar MySQL Database</h3>
    <p>sí no tienes MySQL en tu servidor PHP puedes descargarlo gratis de: http://www.mysql.com</p>
    <h3>Hecho acerca de MySQL Database</h3>
    <p>MySQL es el sistema de base de datos estándar de facto para sitios web con GRANDES volúmenes de datos y usuarios finales (Como Facebook, Twitter y Wikipedia).</p>
    <p>Otra dato importante de MySQLes que puede ser escalado y soporta aplicaciones incrustadas de bases de datos.</p>
    <p>Observe en http://www.mysql.com/customers/ otras grandes compañías usando MySQL</p>
    <h2>Conectar PHP con MySQL</h2>
    <p>Desde PHP 5 y superiores puedes cnectar con una base de datos de MySQL usando:</p>
    <ul>
        <li><strong>MySQLi extension</strong> (La "i" significa mejorada)</li>
        <li><strong>PDO (PHP Data Objects)</strong></li>
    </ul>
    <p>Las versiones anteriores de PHP usaban la extensión MySQL, esta extensión fue descontinuada en 2012</p>
    <h3>¿Debo usar MySQLi o PDO?</h3>
    <p>Si necesitas la respuesta corta, es la que tu prefieras</p>
    <p>Ambas  tienen sus ventajas.</p>
    <p>PDO trabaja con 12 sistemas de bases de datos distintas, mientas MySQLi solo trabaja con bases de datos MySQL</p>
    <p>Entonces, si necesitas cambiar tu proyecto a otro sistema de bases de datos, PDO hace este proceso fácil. solo necsitas cambiar la cadena de conexión y unas pocas consultas. Con MySQLi, necesitarás reescribir el código entero - incluyendo las consultas.</p>
    <p>Las dos son orientadas a objetos, pero MySQLi también ofrece una API procedimental o de procedimiento</p>
    <p>Ambas soportan declaraciones preparadas. Declaraciones preparadas para protección de inyección SQL y son muy importantes para la seguridad de tu aplicación web.</p>
    <h3>Ejemplos con Sintáxis para MySQLi y PDO</h3>
    <p>En los ejercicios que se realizarán se usará la sintaxis para cada una de las 3 formas que hay para trabajar con PHP y MySql</p>
    <ul>
        <li>MySQLi (Orientado a Objetos)</li>
        <li>MySQLi (Procedimental)</li>
        <li>PDO</li>
    </ul>
    <p>Para ello cada ejemplo se guardará en la carpeta correspondiente.</p>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Limitar Datos en SQL</title>
</head>
<body>
    <h1>Limitar datos de Selección de una consulta SQL</h1>
    <p>MySQL provee una claupsula llamada LIMIT la cual permite especicifar el número de registros para una búsqueda</p>
    <p>La sentencia LIMIT hace más fácil mostrar los resultados en grupos pequeños cuando las tablas son muy grandes, esto permite que los resultados sean mucho más rápidos.</p>
    <p>Asumamos que se quiere seleccionar todos los registros del 1 al 30 de una tabla llamada "Orders". La sentencia a usar sería:</p>
    <p><strong>$sql: "SELECT * FROM Orders LIMIT 30"</strong></p>
    <p>Cuando la sentencia SQL sea ejecutada retornará los primeros 30 registros</p>
    <p>¿qué pasa si quiero seleccionar los registros del 16 al 25?</p>
    <p>MySQL también permite manejar este tipo de selecciones usando la sentencia OFFSET</p>
    <p>La sentencia sería así y solo mostraría 10 registros iniciando en el número 16:
    </p>
    <p><strong>$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";</strong></p>
    <p>También se puede acortar la sintaxis escribiendo la consulta de esta forma:</p>
    <p><strong>$sql = "SELECT * FROM Orders LIMIT 15,10";</strong></p>
    <p><strong>Note que los números se intercambian cuando se usa la coma, primero se define donde inicia y luego la cantidad límite</strong></p>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO en php</title>
</head>
<body>
<h2>POO en php</h2>
<?php
echo "<h3> clases y objetos </h3>";
echo "<hr>";

require ('./clases/clase1.php');
require ('./clases/Cliente.php');

$objeto = new ClasePropiedades();

echo $objeto->nombre;
echo "<p>".$objeto->unidades."</p>";
echo "<p>".$objeto->ciudad."</p>";
echo "<p>".$objeto->stock."</p>";

$cliente1 = new Cliente("indra",5,true);
echo $cliente1->getNombre();

//modifica el nombre del cliente
$cliente1->getNombre( );
//consulta nombre de nuevo para ver el cambio
$cliente1->setNombre("Repsol");
echo $cliente1->getNombre();

require ('./clases/Productos.php');

$Producto = new Producto(100,"camisa",5,7.99);

$Producto->setPrecio(7.95);
echo "<br>";
echo $Producto->getPrecio();

$precio = $Producto->getPrecio();
$unidades = $Producto->getUnidades();
$IVA = $Producto->getIVA();
echo "<br>";
echo "<p>El total es: ". $total = $precio*$IVA*$unidades ."</p>";




?>
</body>
</html>

<?php

$nombre=$_POST['nombre'];
$precio = floatval($_POST['precio']);
$stock = intval($_POST['stock']);

$nuevo_producto = [
    'nombre' => $nombre,
    'precio' => $precio,
    'stock' => $stock
];

$archivo = 'productos.json';
$productos =[];

if(file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $productos = json_decode($contenido, true);
}

$productos[] = $nuevo_producto;

file_put_contents($archivo, json_encode($productos, JSON_PRETTY_PRINT));
echo "Producto guardado exitosamente.<br>";
echo "<a href ='Ejercicio2.html'>Registrar otro</a>";
?>
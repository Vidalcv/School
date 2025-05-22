<?php

$nombre=$_POST['nombre'];
$edad = floatval($_POST['edad']);
$grade = intval($_POST['grade']);

$nuevo_producto = [
    'nombre' => $nombre,
    'edad' => $edad,
    'grade' => $grade
];

$archivo = 'alumnos.json';
$productos =[];

if(file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $productos = json_decode($contenido, true);
}

$productos[] = $nuevo_producto;

file_put_contents($archivo, json_encode($productos, JSON_PRETTY_PRINT));
echo "Alumno registrado exitosamente.<br>";
echo "<a href ='index.html'>Registrar otro</a>";
?>
<?php

$dsn = 'mysql:host=localhost,dbname=pokedex';
$usuario = 'root';
$contraseña = '';

try{
    $conexion = new PDO($dsn, $usuario, $contraseña);

    $consulta = $conexion->query("SELECT ataque FROM pokemon WHERE nombre = 'pikachu'");
    $resultado = $consulta->fetch();
    echo "Pikachu tiene un ataque de: " . $resultado['ataque'] . "<br>";

    $nuevoAtaque = 70;
    $conexion->exec("UPDATE pokemon SET ataque = $nuevoAtaque WHERE nombre = 'charmander'");
    echo "¡Charmander eh entrenado y ahora tiene un ataque de $nuevoAtaque! ";
} catch (PDOException $e){
    echo " Error en la conexion: " . $e->getMessage();
}
?>
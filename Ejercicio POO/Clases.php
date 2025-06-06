<?php
class Coche{
    public $marca;
    public $modelo;
    public $año;

    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    public function detalles() {
        return "Marca:$this->marca&nbsp;&nbsp;&nbsp;&nbsp; Modelo:$this->modelo&nbsp;&nbsp;&nbsp;&nbsp; Año:$this->año<br>";
    }
}

class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola $this->nombre";
    }
}

$miCoche = new Coche("Ford","F-150",1980);
echo $miCoche->detalles() ;

$unaPersona = new Persona("Vidal",21);
echo $unaPersona->saludar();
?>
<?php

class Persona {
    public $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }

    public function getEdad() {
        return $this->edad;
    }
}

class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function estudiar() {
        return "{$this->nombre} está estudiando {$this->carrera}.";
    }
}

$persona = new Persona("Ana", 28);
$estudiante = new Estudiante("Luis", 20, "Ingeniería de Sistemas");

echo $persona->saludar();
echo "<br>";
echo $estudiante->saludar();
echo "<br>";
echo $estudiante->estudiar();

echo "<br>";
echo "Edad del estudiante: " . $estudiante->getEdad();

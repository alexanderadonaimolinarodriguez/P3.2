<?php
class Operaciones {
    //Alexander Adonai Molina Rodríguez - 242310131 - Ing. Imformática - POO

    // Propiedades privadas
    private $num1 = 5; // La asignación de valores es solo como ejemplo
    private $num2 = 9; // No es una buena práctica, para ello se usarán constructores

    // Método sin parámetros: usa las propiedades de la clase
    public function sumarSinParametros() {
        return $this->num1 + $this->num2;
    }

    // Método con parámetros: recibe valores en la llamada 
    public function sumarConParametros($a, $b) {
        return $a + $b;
    }

    // Método sin parámetros: usa las propiedades de la clase
    public function multiplicarSinParametros() {
        return $this->num1 * $this->num2;
    }

    // Método con parámetros: recibe valores en la llamada 
    public function multiplicarConParametros($a, $b) {
        return $a * $b;
    }
}
?>
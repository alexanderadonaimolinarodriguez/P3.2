<?php
//Alexander Adonai Molina Rodríguez - 242310131 - Ing. Imformática - POO

// Incluir la clase Operaciones
require_once 'operaciones.php';

// Crear un objeto de la clase Operaciones
$operacion = new Operaciones();

// Llamar al método sin parámetros
echo "Suma sin parámetros (usando propiedades de la clase): " 
. $operacion->sumarSinParametros() . "<br>";

// Llamar al método con parámetros
echo "Suma con parámetros (5 + 7): " 
. $operacion->sumarConParametros(5, 7) . "<br>";

// Llamar al método sin parámetros
echo "multiplicación sin parámetros (usando propiedades de la clase): " 
. $operacion->multiplicarSinParametros() . "<br>";

// Llamar al método con parámetros
echo "multiplicación con parámetros (5 * 7): " 
. $operacion->multiplicarConParametros(5, 7) . "<br>";
?>
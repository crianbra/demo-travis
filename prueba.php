<?php
require_once("Demo.php");
$nombre = "dani";
$test = new Demo();
$test->setNombre($nombre);
echo "el nombre es: ". $test->getNombre();
?>

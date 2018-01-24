<?php
require_once("Demo.php");
$id = "1";
$nombre = "dani";
$test = new Demo();
$test->setIdDemo($id);
$test->setNombre($nombre);
echo "el id es: ". $test->getIdDemo();
echo "el nombre es: ". $test->getNombre();
?>

<?php
require_once("Demo.php");
$idDemo = "1";
$nombre = "dani";
$test = new Demo();
$test->setIdDemo($idDemo);
$test->setNombre($nombre);
echo "el id es: ". $test->getIdDemo();
echo "el nombre es: ". $test->getNombre();
?>

<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];

$salario = $horas * $pago;
echo " Su nombre es: " .$nombre;
echo "<br>";
echo " Su salario es: $" .$salario;
?>
<?php
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;
$total = $subtotal;
echo " Nombre del cliente:".$nombre;
echo "<br>";
echo " Producto:" .$producto;
echo "<br>";
echo " La cantidad:" .$cantidad;
echo "<br>";
echo " El precio: $" .$precio;
echo "<br>";
echo " El subtotal es:$" .$subtotal;
echo "<br>";
echo " El total a pagar es: $" .$total;
?>

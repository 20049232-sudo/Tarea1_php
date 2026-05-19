<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo " El precio es: " .$precio;
echo "<br>";
echo "El iva es:" .$iva;
echo "<br>";
echo "El total es:" .$total;
?>
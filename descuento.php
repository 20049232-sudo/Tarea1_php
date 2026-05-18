<?php
$compra = $_POST['compra'];

if ($compra >= 50) {
    $descuento = $compra * 0.10;
    $total = $compra - $descuento;
    echo "El descuento es: $" . $descuento . "<br>";
    echo "El total a pagar es: $" . $total;
} else {
    echo "No se aplica descuento. Total a pagar: $" . $compra;
}
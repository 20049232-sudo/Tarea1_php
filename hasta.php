<?php
$numero = $_POST['numero'];
$suma = 0;
$i = 1;

while ($i <= $numero) {
    $suma += $i;
    $i++;
}
echo "La suma es" .$suma;
?>
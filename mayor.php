<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
if ($numero1 > $numero2) {
    echo "El numero mayor  es: " .$numero1;
} elseif ($numero2 > $numero1) {
    echo "El numero mayor es:" .$numero2;
}
?>
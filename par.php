<?php
$numero = $_POST['numero'];
if ($numero % 2 ==0) {
    echo "El numero  es par:" .$numero;
}else{
    echo "El numero es impar:" .$numero;
}
?>
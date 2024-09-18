<?php
$numero = $_POST['numero'];

if ($numero == 0) {
    echo "o nùmero digitado é igual a zero";
} elseif ($numero > 0) {
    echo "o nùmero digitado é positivo";
} else {
    echo "o nùmero digitado é negativo";
}

?>
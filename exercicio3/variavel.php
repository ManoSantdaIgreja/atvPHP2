<?php
$numeroone = $_POST['numeroone'];
$numerotwo = $_POST['numerotwo'];

if ($numeroone > $numerotwo ) {
    echo "o $numeroone é maior que $numerotwo";
} else {
    echo "o $numeroone é menor que $numerotwo";
}
?>
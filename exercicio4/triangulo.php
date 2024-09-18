<?php
$numeroone = $_POST['numeroone'];
$numerotwo = $_POST['numerotwo'];
$numerotree = $_POST['numerotree'];

if (($numeroone + $numerotwo > $numerotree) && ($numeroone + $numerotree > $numerotwo) && ($numerotree + $numerotwo > $numeroone) ){
    if ($numeroone == $numerotwo && $numerotwo == $numerotree)
    echo 'é um triângulo equilátero';

 elseif ($numeroone == $numerotwo || $numeroone == $numerotree || $numerotwo == $numerotree) 
    echo 'é um triângulo isóceles';

 elseif ($numeroone !== $numerotwo || $numeroone !== $numerotree || $numerotwo !== $numerotree) 
    echo 'é um triângulo escaleno';

} else {
    echo 'valores inválidos';
}
?>
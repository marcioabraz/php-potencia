<?php

function pot($numero, $potencia){
    if($potencia < 0){
        $numero = 1 / $numero;
        $potencia = $potencia * -1;
    }

    $total = 1;

    for($i = 0; $i < $potencia; $i++){
        $total = $total * $numero;
    }

    return $total;
}

$num = (int) $_POST['num1'];
$pot = (int) $_POST['num2'];

echo 'O num ' .$num ." elevado a ".$pot ." é ". pot($num,$pot);

?>
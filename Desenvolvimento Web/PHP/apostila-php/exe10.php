<!-- Criar um programa que utiliza o array abaixo e imprime, somente, seus elementos
pares. Um valor em cada linha.
$valores = array(0, 10, 3, 1, 7, 55, 15, 21, 99); -->

<?php 
    $valores = array(0, 10, 3, 1, 7, 55, 15, 21, 99);

    foreach($valores as $v) {
        if($v % 2 == 0){
            echo $v . "\n";
        }
    }
?>
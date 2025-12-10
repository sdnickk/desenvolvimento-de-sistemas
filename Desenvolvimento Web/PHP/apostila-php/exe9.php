<!-- Criar um programa que utiliza o array abaixo e imprime seus elementos na ordem 
inversa. Um valor em cada linha. 
$valores = array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90);  -->

<?php 
    $valores = array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90);

    for ($i = count($valores) - 1; $i >= 0; $i--){
        print $valores[$i] . "\n";
    }
?>
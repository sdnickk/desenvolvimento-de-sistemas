<?php 
 
//listarPares: retorna um novo array com os valores pares do array $valores 
function listarPares ($valores) 
{ 
    $rv = array(); 
    $tam = count($valores); 
    for ($c = 0; $c < $tam; $c++) 
    { 
        if (($valores[$c] % 2) == 0) 
        { 
            $rv[] = $valores[$c]; 
        } 
    } 
} 
 
$valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9); 
 
$valoresPares = listarPares($valores);  //recebendo o resultado 
 
echo $valoresPares;
 
?>
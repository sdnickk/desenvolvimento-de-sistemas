<?php 
 
// Descrição: array linear bidimensional de inteiros 
 
$tabela[0][0] = 10; 
$tabela[0][1] = 20; 
$tabela[0][2] = 30; 
$tabela[1][0] = 40; 
$tabela[1][1] = 50; 
$tabela[1][2] = 60; 
 
for($i = 0; $i < 3; $i++) { 
    for($j = 0; $j < 3; $j++) { 
        print $tabela[$i][$j] . "  "; 
    } 
    print "<br>"; 
} 
 
?>
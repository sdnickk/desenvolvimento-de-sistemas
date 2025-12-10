<?php 
 
//fatorial: retorna valor inteiro correspondente ao fatorial de $n 
function fatorial ($n) 
{ 
    if ($n == 0 || $n == 1) 
    { 
        return 1; 
    } 
 
    return $n * fatorial($n-1); 
} 
 
print "Fatorial de 6 = " . fatorial(6) . "<br>"; 
print "Fatorial de 8 = " . fatorial(8); 
 
?>
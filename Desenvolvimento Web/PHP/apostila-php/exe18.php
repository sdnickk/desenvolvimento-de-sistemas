<!-- Implemente o exemplo da função fatorial, utilizando uma solução iterativa (com 
loops for ou while) ao invés de recursiva. Compare questões como: facilidade de 
leitura, desempenho, utilização dos recursos, etc.  -->


<?php
function fatorial_iterativo($n) {
    if ($n < 0) {
        return null; // ou lançar erro: fatorial não definido para negativos
    }

    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Exemplo de uso:
$n = 5;
echo "Fatorial iterativo de $n = " . fatorial_iterativo($n);
?>
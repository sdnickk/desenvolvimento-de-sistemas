<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>

<body>
    <h1>exemplo for</h1>
    
    <?php
    /* A sintaxe do comando é a seguinte:
    for(exp1; exp2; exp3) {
    bloco de comandos;
    }
    Conheça os componentes do comando for. Tente perceber as semelhanças com o
    comando while.
    • exp1 - zero ou mais expressões que serão executadas antes da repetição
    do bloco de comandos;
    • exp2 - teste lógico que, no caso de ser avaliado como falso, encerra a
    repetição;
    • exp3 - zero ou mais expressões que serão executadas no momento do
    término de uma repetição. Aqui, geralmente, realizamos operações de
    incrementos/decrementos */

    for ($c = 0; $c <= 10; $c++) {
        print $c . "<br>";
    }
    ?>
</body>

</html>
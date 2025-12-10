<!-- Implemente uma calculadora primitiva (operações de soma, subtração, divisão e 
multiplicação). Considere que o usuário irá fornecer três parâmetros de entrada: 
valor numérico A, valor numérico B, operação aritmética. Como saída, lhe será 
apresentada tela com o resultado do cálculo.  -->
<html>

<head></head>

<body>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <label for="num1">Insira um número: </label>
        <input type="number" name="num1" id="num1"><br>
        <label for="num2">Insira um número: </label>
        <input type="number" name="num2" id="num2"><br>
        <label for="num1">Escolha uma operação (1 para soma, 2 para subtração, 3 para multiplicação e 4 para divisão):</label>
        <input type="number" name="op" id="op">
        <input type="submit" value="calcular">
    </form>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['op'];

    if ($operacao > 4 || $operacao == NULL || $operacao == 0){
        print "Erro! Por favor escolha uma operação válida.";
    } else{ 
    switch($operacao){
        case 1:
            $resultado = $num1 + $num2;
            print "a soma dos números é " . $resultado;
            break;

        case 2:
            $resultado = $num1 - $num2;
            print "a diferença dos números é " . $resultado;
            break;
        
        case 3:
            $resultado = $num1 * $num2;
            print "o produto dos números é " . $resultado;
            break;

        case 4:
            if ($num2 == 0){
                print "Erro! Divisão por zero. Por favor escolha outro número ou operação";
            } else {
                $resultado = $num1 / $num2;
                print "a razão dos números é " . $resultado;
                break;
            };
    };
};
    ?>
</body>

</html>
<!-- Ler três números inteiros, a partir de formulário, e imprimir na tela qual o maior e
menor valor fornecido.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">insira um número:</label>
        <input type="number" name="num1" id="num1">
        <label for="num1">insira outro número:</label>
        <input type="number" name="num2" id="num2">
        <label for="num1">insira o último número:</label>
        <input type="number" name="num3" id="num3">
        <input type="submit" value="Calcular">
    </form>
    <?php 
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $num3 = (int)$_POST['num3'];

    $numeros = [$num1, $num2, $num3];
    $maior = max($numeros);
    $menor = min($numeros);

    print "O maior número é " . $maior . " e o menor numero é ". $menor;

    ?>
</body>
</html>
<!-- Ler dois números inteiros, a partir de formulário. Se o segundo for diferente de
zero, calcular e imprimir o quociente do primeiro pelo segundo. Caso contrário,
imprimir a mensagem “DIVISÃO POR ZERO" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">insira um numero:</label>
        <input type="number" name="num1" id="num1">
        <label for="num1">insira outro numero:</label>
        <input type="number" name="num2" id="num2">
        <input type="submit" value="Calcular">
    </form>

    <?php 
    $dividendo = $_POST['num1'];
    $divisor = $_POST['num2'];

    if($divisor != 0) {
        $resultado = $dividendo / $divisor;
        print "o quociente é: ". $resultado;
    } else {
        print "divisão por zero. não é possível realizar a divisão!";
    }
    ?>
</body>
</html>
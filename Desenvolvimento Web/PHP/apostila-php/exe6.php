<!-- Elabore um programa, que calcule o que deve ser pago por um produto 
considerando o preço normal de etiqueta e a escolha da condição de pagamento. 
Utilize os códigos da tabela a seguir para ler qual a condição de pagamento 
escolhida e efetuar o cálculo adequado. -->
<html>

<head></head>

<body>
    <form action="" method="post">
        <label for="preco">Digite o preço de seu produto: </label>
        <input type="text" name="preco" id="preco"> <br>
        <label for="pagamento">Escolha a forma de pagamento (1 para a vista em dinheiro ou cheque, 2 para a vista no cartão de crédito, 3 para parcela em 2 vezes e 4 para parcela em 3 vezes ):</label>
        <input type="number" name="pagamento" id="pagamento"><br>
        <input type="submit" value="ver valor">
    </form>

    <?php
    $pagamento = $_POST['pagamento'];
    $preco = $_POST['preco'];
    $float = (float)str_replace(',', '.', $preco);
    $formatado = number_format($float, 2, ',', '.');

    switch ($pagamento) {
        case 1:
            print "Seu novo preço é " . $formatado * 0.9;
            break;
        
        case 2:;
            print "Seu novo preço é " . $formatado * 0.95;
            break;

        case 3:
            print "Seu novo preço é " . $formatado;
            break;

        case 4:
            print "Seu novo preço é " . $formatado * 1.10;
            break;
    }
    ?>
</body>

</html>
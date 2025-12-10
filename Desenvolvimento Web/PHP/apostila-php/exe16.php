<!-- Escreva uma função que recebe um array de números e retorna o maior valor 
contido no array. -->
<html>
<head></head>

<body>
    <form action="" method="post">
        <label for="nums">escreva uma série de números, separados por vírgulas:</label>
        <input type="text" name="nums" id="nums"><br>
        <input type="submit" value="enviar">
    </form>

    <?php 
        function maiorNumero(){
            $numeros = $_POST ['nums'];
            $arrayS = explode(',', $numeros);
            $arrayNums = array_map('intval', $arrayS);
            $maiorValor = max($arrayNums);

            echo 'o maior número é ' . $maiorValor;
        } maiorNumero();
    ?>
</body>

</html>
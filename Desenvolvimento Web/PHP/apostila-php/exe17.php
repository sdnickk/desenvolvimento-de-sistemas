<!-- Escreva uma função que recebe um array de números e retorna um novo array com 
os elementos em ordem crescente.  -->

<html>
<head></head>

<body>
    <form action="" method="post">
        <label for="nums">escreva uma série de números, separados por vírgulas:</label>
        <input type="text" name="nums" id="nums"><br>
        <input type="submit" value="enviar">
    </form>

    <?php 
        function ordemNumero(){
            $numeros = $_POST ['nums'];
            $arrayS = explode(',', $numeros);
            $arrayNums = array_map('intval', $arrayS);
            sort($arrayNums);
            $ordenado = implode(', ', $arrayNums);

            echo 'a ordem crescente dos numeros é '. $ordenado;
    }ordemNumero();
    ?>
</body>

</html>
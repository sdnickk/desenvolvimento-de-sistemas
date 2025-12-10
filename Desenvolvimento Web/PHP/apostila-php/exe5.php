<!-- Imprimir a tabuada de um número qualquer fornecido pelo usuário. O resultado 
deve ser exibido numa tabela HTML seguindo o formato abaixo.  -->

<html>

<head></head>

<body>
    <form action="" method="post">
        <label for="num">Insira um número para imprimir a tabuada</label>
        <input type="number" name="num" id="num"><br>
        <input type="submit" value="calcular">
    </form><br>
    resultado <br>
    <table border="1" width="30%">
        <tr bgcolor="#7f7fa5" align="center">
            <td>expressão</td>
            <td>resultado</td>
        </tr>
        <?php
        $num = $_POST['num'];
        $c = 0;

        for ($i = $c; $i <= 10; $i++) {
            print "<tr>
            <td>". $num . " x ". $i. "</td>
            <td>". $num * $i ."</td>
            </tr> ";
        };
        ?>
    </table>
</body>

</html>
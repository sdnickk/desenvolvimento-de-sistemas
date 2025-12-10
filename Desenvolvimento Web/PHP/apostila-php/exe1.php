<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor de temp F -> C°</title>
</head>

<body>
    <h1>conversor de temp F -> C°</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Temperatura inical em F</td>
                <td><input type="text" name="tempInicial" maxlength="5" /></td>
            </tr>
            <tr>
                <td>temperatura final em F</td>
                <td><input type="text" name="tempFinal" maxlength="5"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="calcular" name="btnAcao">
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>
        <?php
        //verfica se acionou o botao para cálculo
        if ($_POST != NULL) {
            //leitura das temperaturas

            $inicial = $_POST['tempInicial'];
            $final = $_POST['tempFinal'];

            if ($inicial == NULL || $final == NULL || !is_numeric($inicial) || !is_numeric($final)) {
                print "<font color = 'red'>";
                print "parametros invalidos. Tente novamente!";
                print "</font>";
                exit();
            }
        ?>
            <br />
            resultado <br />
            <hr align="left" width="40%" />

            <table border="1" width="30%">
                <tr bgcolor="#7f7fa5" align="center">
                    <td>Fahrenheint</td>
                    <td>Celsius</td>
                </tr>
                <?php
                //cálculo de conversão da faixa de temperaturas 

                for ($t = $inicial; $t <= $final; $t += 10) {
                ?>
                    <tr align="center">
                        <td><?= $t ?></td>
                        <td><?= number_format(($t - 32) * (5.0 / 9.0), 4) ?></td>
                    </tr>
                <?php
                } //fim do for
                ?>
            </table>
        <?php
        } //fim do if
        ?>
    </form>
</body>

</html>
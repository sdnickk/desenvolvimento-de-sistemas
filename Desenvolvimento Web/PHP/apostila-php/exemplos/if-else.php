<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção composta: comando IF-ELSE </title>
</head>

<body>
    <form action="" method="post">
        <label for="txtNumero">insira um número</label>
        <input type="number" name="txtNumero" id="txtNumero">
        <input type="submit" value="submit">
    </form>

    <?php
    $numero = (int) $_POST["txtNumero"];

    if (($numero % 2) == 0) {
        print "O número inteiro $numero é par";
    } else {
        print "O número inteiro $numero é impar";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comando SWITCH </title>
</head>

<body>

    <form action="" method="post">
        <label for="voto">digite seu voto (1 para Lula, 2 para Ciro, 3 para Eneias):</label>
        <input type="number" id="voto" name="voto">
        <input type="submit" value="Submit">
    </form>


    <?php
    $voto = (int) $_POST["voto"];
    switch ($voto) {
        case 1:
            print "Opção 1 = Lula";
            break;
        case 2:
            print "Opção 2 = Ciro";
            break;
        case 3:
            print "Opção 3 = Eneias";
            break;
        default:
            print "Opção inválida!";
    }
    ?>
</body>

</html>
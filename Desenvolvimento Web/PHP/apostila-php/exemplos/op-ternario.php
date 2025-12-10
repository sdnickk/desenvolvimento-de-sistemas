<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
</head>

<body>
    <form action="" method="post">
        <label for="txtX">insira um número</label>
        <input type="number" name="txtX" id="txtX">
        <label for="txtX">insira um número</label>
        <input type="number" name="txtY" id="txtY">
        <input type="submit" value="submit">
    </form>

    <?php
 /*Este operador nada mais é do que uma maneira compacta de expressar o comando
if-else. Conveniente em situações onde as expressões de teste são simples e
 compactas. Sua sintaxe é a seguinte: (condição) ? expressão 1 : expressão 2; */
 
    $x = (int) $_POST["txtX"];
    $y = (int) $_POST["txtY"];
    $maior = ($x > $y) ? $x : $y;
    print "maior valor = $maior";

    ?>
</body>

</html>
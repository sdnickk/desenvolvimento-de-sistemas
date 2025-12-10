<?php
$arquivo = 'votos.txt';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enquete</title>
</head>
<body>
    <h1>Enquete</h1>
    <p>Pergunta: Qual sua linguagem preferida?</p>

    <form method="post" action="votar.php">
        <label>
            <input type="radio" name="opcao" value="0" checked>
            PHP
        </label><br>
        <label>
            <input type="radio" name="opcao" value="1">
            JavaScript
        </label><br>
        <label>
            <input type="radio" name="opcao" value="2">
            Python
        </label><br><br>

        <button type="submit">Votar</button>
    </form>

    <p><a href="resultado.php">Ver resultado parcial</a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conteúdo de $_SERVER</title>
</head>
<body>
    <table border="1" cellpadding="4" cellspacing="0">
        <tr>
            <th>Chave</th>
            <th>Valor</th>
        </tr>
        <?php
        foreach ($_SERVER as $chave => $valor) {
            // htmlspecialchars para evitar interpretar o conteúdo como HTML
            $chaveEsc = htmlspecialchars($chave);
            $valorEsc = htmlspecialchars((string)$valor);
            echo "<tr><td>{$chaveEsc}</td><td>{$valorEsc}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
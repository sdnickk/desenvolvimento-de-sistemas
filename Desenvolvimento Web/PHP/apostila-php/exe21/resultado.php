<?php
$arquivo = 'votos.txt';

// Lê votos
$linhas = file($arquivo, FILE_IGNORE_NEW_LINES);
$votos = array_map('intval', $linhas);

// Calcula total
$total = array_sum($votos);
$opcoes = ['PHP', 'JavaScript', 'Python'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Enquete</title>
</head>
<body>
    <h1>Resultado parcial da enquete</h1>

    <?php if ($total == 0): ?>
        <p>Ainda não há votos.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($opcoes as $i => $texto): 
                $v = $votos[$i] ?? 0;
                $percent = ($v / $total) * 100;
            ?>
                <li>
                    <?= htmlspecialchars($texto) ?>:
                    <?= $v ?> voto(s) -
                    <?= number_format($percent, 2, ',', '.') ?>%
                </li>
            <?php endforeach; ?>
        </ul>
        <p>Total de votos: <?= $total ?></p>
    <?php endif; ?>

    <p><a href="enquete.php">Voltar à votação</a></p>
</body>
</html>

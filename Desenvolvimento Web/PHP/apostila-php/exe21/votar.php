<?php
$arquivo = 'votos.txt';

if (!isset($_POST['opcao'])) {
    die('Nenhuma opção selecionada.');
}

$opcao = (int)$_POST['opcao'];

// Lê votos atuais
$linhas = file($arquivo, FILE_IGNORE_NEW_LINES);
foreach ($linhas as &$linha) {
    $linha = (int)$linha;
}

// Incrementa a opção escolhida
if (isset($linhas[$opcao])) {
    $linhas[$opcao]++;
}

// Salva de volta no arquivo (uma linha por opção)
$conteudo = implode("\n", $linhas) . "\n";
file_put_contents($arquivo, $conteudo);

// Redireciona para o resultado
header('Location: resultado.php');
exit;

<?php
define('SALARIO_MINIMO', 1627.00);

function calcularImpostoRenda($cpf, $dependentes, $rendaMensal) {
    $descontoDependentes = $dependentes * (0.05 * SALARIO_MINIMO);
    $rendaLiquida = $rendaMensal - $descontoDependentes;
    $rendaEmSalarios = $rendaLiquida / SALARIO_MINIMO;

    if ($rendaEmSalarios <= 2) {
        $aliquota = 0.0;      // isento
    } elseif ($rendaEmSalarios <= 3) {
        $aliquota = 0.05;     // 5%
    } elseif ($rendaEmSalarios <= 5) {
        $aliquota = 0.10;     // 10%
    } elseif ($rendaEmSalarios <= 7) {
        $aliquota = 0.15;     // 15%
    } else {
        $aliquota = 0.20;     // 20%
    }

    $imposto = $rendaLiquida * $aliquota;

    return [
        'cpf'              => $cpf,
        'dependentes'      => $dependentes,
        'renda_mensal'     => $rendaMensal,
        'desconto_dep'     => $descontoDependentes,
        'renda_liquida'    => $rendaLiquida,
        'aliquota'         => $aliquota,
        'imposto_devido'   => $imposto
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf         = $_POST['cpf'] ?? '';
    $dependentes = (int)($_POST['dependentes'] ?? 0);
    $renda       = (float)($_POST['renda'] ?? 0);

    $resultado = calcularImpostoRenda($cpf, $dependentes, $renda);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Imposto de Renda</title>
</head>
<body>
    <h1>Imposto de Renda</h1>

    <form method="post">
        <label>CPF:
            <input type="text" name="cpf" required>
        </label><br><br>

        <label>Número de dependentes:
            <input type="number" name="dependentes" min="0" required>
        </label><br><br>

        <label>Renda mensal (R$):
            <input type="number" step="0.01" name="renda" min="0" required>
        </label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <h2>Resultado</h2>
        <p>CPF: <?= htmlspecialchars($resultado['cpf']) ?></p>
        <p>Dependentes: <?= $resultado['dependentes'] ?></p>
        <p>Renda mensal: R$ <?= number_format($resultado['renda_mensal'], 2, ',', '.') ?></p>
        <p>Desconto por dependentes: R$ <?= number_format($resultado['desconto_dep'], 2, ',', '.') ?></p>
        <p>Renda líquida: R$ <?= number_format($resultado['renda_liquida'], 2, ',', '.') ?></p>
        <p>Alíquota: <?= $resultado['aliquota'] * 100 ?>%</p>
        <p>Imposto devido: R$ <?= number_format($resultado['imposto_devido'], 2, ',', '.') ?></p>
    <?php endif; ?>
</body>
</html>

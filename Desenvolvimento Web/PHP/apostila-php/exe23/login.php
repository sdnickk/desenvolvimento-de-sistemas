<?php
session_start();
$erro = $_SESSION['erro_login'] ?? '';
unset($_SESSION['erro_login']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Autenticação</title>
</head>

<body>
    <h1>Login</h1>

    <?php if ($erro): ?>
        <p style="color:red;"><?php echo htmlspecialchars($erro); ?></p>
    <?php endif; ?>

    <form method="post" action="autenticar.php">
        <label>Login:
            <input type="text" name="login" required>
        </label><br>
        <label>Senha:
            <input type="password" name="senha" required>
        </label><br>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>
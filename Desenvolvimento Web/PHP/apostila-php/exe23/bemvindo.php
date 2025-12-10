<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_login']); ?>!</h1>
    <p>Acesso autorizado ao sistema.</p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>

<?php
session_start();

// conexão com o banco (exemplo com mysqli)
$mysqli = new mysqli('localhost', 'usuario', 'senha', 'meubanco');
if ($mysqli->connect_errno) {
    die('Erro ao conectar ao banco de dados.');
}

$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';

// busca usuário pelo login usando prepared statement
$sql = "SELECT id, login, senha_hash FROM usuarios WHERE login = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $login);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
    // autenticação OK
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_login'] = $usuario['login'];

    header('Location: bemvindo.php'); // tela inicial de boas-vindas
    exit;
} else {
    // falha na autenticação
    $_SESSION['erro_login'] = 'Login ou senha inválidos.';
    header('Location: login.php'); // volta à tela de autenticação
    exit;
}

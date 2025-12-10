<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção simples: comando IF</title>
</head>

<body>
    <form action="" method="post">
        <label for="login">Login:</label>
        <input type="text" id="txtlogin" name="txtlogin">
        <label for="login">Senha:</label>
        <input type="password" id="txtsenha" name="txtsenha">
        <input type="submit" value="Submit">    
    </form>


    <?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    if ($login == NULL || $senha == NULL) {
        print "Login e/ou senha inválida!";
        exit();
    }
    print "Dados de acesso OK!";
    ?>
</body>

</html>
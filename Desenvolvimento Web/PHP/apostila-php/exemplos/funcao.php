<?php
//validaSenha: imprime mensagem de senha válida ou inválida
function validaSenha ($senha, $senhaConfirmacao)
{
 if($senha == $senhaConfirmacao)
 {
 print "<p>Senha ok. Obrigado.</p>";
 }
 else
 {
 print "<p>Senhas não confere. Por favor, tente
novamente.</p>";

 }
}
?>
<HTML>
<BODY>
    <form action="" method="post">
        <label for="senha1">Digite sua senha:</label>
        <input type="text" name="senha1" id="senha1"><br>
        <label for="senha2">Digite sua senha:</label>
        <input type="text" name="senha2" id="senha2"><br>
        <input type="submit" value="submit">
    </form>
<?php
//parâmetros advindos de um formulário
$senha1 = $_POST["senha1"];
$senha2 = $_POST["senha2"];
print "Primeira senha: " . $senha1 . "<BR/>";
print "Segunda senha: " . $senha2 . "<BR/>";

validaSenha($senha1, $senha2); //chamada ou uso da função validaSenha
?>
</BODY>
</HTML> 
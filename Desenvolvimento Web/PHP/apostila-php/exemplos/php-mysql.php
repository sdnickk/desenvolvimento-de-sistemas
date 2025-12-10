<!-- Juntando tudo em página de Consulta 
É importante, também, desenvolver uma página completa para ilustrar o comando 
SELECT  Basicamente, criaremos uma página que consulta informações dos contatos cadastrados no banco de dados. Uma explicação mais detalhada dos 
recursos novos está disponível após o exemplo.  -->
<HTML> 
<BODY> 
<?php 
// Descrição: apresenta listagem dos contatos cadastrados no banco de dados 
 
//abre conexao ao servidor MySQL 
$conexaoBD = mysql_connect("localhost", "root", "") or die("Erro:" . mysql_error()); 
 
//conecta-se ao banco de dados meu_banco 
mysql_select_db("meu_banco", $conexaoBD) or die("Erro:" . 
mysql_error()); 
 
//cria consulta SQL 
$sql = "SELECT ds_nome, ds_email, ds_endereco, ds_telefone, 
dt_aniversario FROM contato_tab ORDER BY ds_nome "; 
 
//executa consulta 
$resultado = mysql_query($sql, $conexaoBD) or die("Erro:" . mysql_error()); 
?> 
<TABLE BORDER="1"> 
  <TR> 
    <TD><b>Nome</b></TD> 
    <TD><b>Email</b></TD> 
    <TD><b>Endereço</b></TD> 
    <TD><b>Telefone</b></TD> 
    <TD><b>Aniversário</b></TD> 
  </TR> 
 74 
 
<? 
while($registro = mysql_fetch_array($resultado))  //lê registro 
{ 
?> 
  <TR> 
    <TD><?= $registro["ds_nome"] ?></TD> 
    <TD><?= $registro["ds_email"] ?></TD> 
    <TD><?= $registro["ds_endereco"] ?></TD> 
    <TD><?= $registro["ds_telefone"] ?></TD> 
    <TD><?= $registro["dt_aniversario"] ?></TD> 
  </TR> 
<? 
} 
?> 
</TABLE> 
</BODY> 
</HTML> 
<? 
//fecha conexao ao servidor MySQL 
mysql_close($conexaoBD); 
?>
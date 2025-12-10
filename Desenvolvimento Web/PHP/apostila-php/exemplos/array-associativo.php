<?php
    $dadosUsuario = array(
    "nome"  => "Fulano de Tal",
    "email" => "fulano@email.com",
    "senha" => "a1b2c3"
);

print $dadosUsuario["nome"]  . "<br>";
print $dadosUsuario["senha"] . "<br>";
print $dadosUsuario["email"] . "<br>";
?>

<!-- Para concluir esta seção. Serão ilustradas construções de repetição para imprimir 
todos os valores de um array associativo.  -->
<?php 
// Descrição: imprimindo array associativo com auxílio do laço while 
 
while(list($chave, $valor) = each($array)) { 
    print "dadosUsuario[$chave] = $valor <br>"; 
} 
 
?> 
 
<?php 
// Descrição: imprimindo array associativo com auxílio do laço foreach 
 
foreach ($dadosUsuario as $valor) { 
    print "Valor: $valor <br>"; 
} 
 
?>

<?php 
// Descrição: imprimindo array linear com auxílio do laço foreach 
 
$a = array(10, 20, 30, 40, 50); 
 
foreach ($a as $v) { 
    print "Valor atual = $v <br>"; 
}
?>
<?php 
$nomeArquivo = "mensagem.txt"; 
 
// abre arquivo para escrita 
$f = fopen($nomeArquivo, "w") or die("Erro ao abrir arquivo"); 
 
// escreve conteúdo no arquivo com fwrite 
fwrite($f, "Seja bem vindo!\n") or die("Erro ao escrever no 
arquivo"); 
 
fclose($f); 
?>
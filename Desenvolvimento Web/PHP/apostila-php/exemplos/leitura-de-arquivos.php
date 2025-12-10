<?php 
// arquivo a ser lido 
$nomeArquivo = "paragrafo.txt"; 
 
// abre arquivo no modo leitura e retorna manipulador de arquivo 
$f = fopen($nomeArquivo, "r") or die("Não foi possível abrir 
arquivo"); 
 
// lê conteúdo do arquivo associado ao manipulador 
$dados = fread($f, filesize($nomeArquivo)) or die("Erro na 
leitura"); 
 
// fecha arquivo 
fclose($f); 
 
// imprime dados 
print $dados; 
?>


<?php 
// Uma forma alternativa de realizar a mesma ação é ler o conteúdo linha-a-linha através da função fgets() 
//em combinação com a função de teste de fim de arquivo feof().
$nomeArquivo = "paragrafo.txt"; 

$f = fopen($nomeArquivo, "r") or die("Não foi possível abrir 
arquivo"); 
 
// lê e imprime conteúdo do arquivo 
while(!feof($f)) 
{ 
    $dados = fgets($f); 
    print $dados; 
} 
 
fclose($f); 
 
print $dados; 
?> 

<?php 
// E, por fim, temos a possibilidade de carregar o conteúdo inteiro do arquivo em um array. 
//Operação realizada pela função file(), que associa cada linha do arquivo a uma posição do array. 
$nomeArquivo = "paragrafo.txt"; 
 
// lê arquivo e retorna conteúdo em array 
$dados = file($f) or die("Erro na leitura"); 
 
// imprime conteúdo do array 
foreach ($dados as $linha) 
{ 
    print $dados; 
} 
 
print $dados; 
?>
<?php 
 
$alunos = array(); 
 
$alunos[1] = "João"; 
$alunos[2] = "Maria"; 
$alunos[3] = "José"; 
//... 
//... 
$alunos[15] = "Ana"; 
 
?> 
<!-- De posse dos nomes dos alunos, podemos precisar pesquisar o nome do aluno pelo 
número da chamada. Vejamos como realizar esta operação:  -->
<?
print "O aluno número $num da chamada é o " . $alunos[$num]; 
?> 
<!-- Também, podemos precisar imprimir uma listagem da chamada. Isso é conseguido 
com o seguinte fragmento de código:  -->

<?
for($c = 1; $c <= count($alunos); $c++) { 
    print $c . " - " . $alunos[$c] . "<br>"; 
} 
?>
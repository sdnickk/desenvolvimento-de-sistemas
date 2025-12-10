<?php 
class Produto { 
    function getDescricao() { 
        exit(); 
    } 
} 
 
class Relogio extends Produto { 
    function getDescricao() { 
        return "Relógio com ponteiros e marcadores inspirados em 
modelos automotores ..."; 
    } 
} 
 
class Tenis extends Produto { 
    function getDescricao() { 
        return "Tênis esportivo com solado de borracha anti
derrapante e sistema de absorção de impactos ..."; 
    } 
} 
 
//Fluxo principal do programa 
$produtos = array(new Relogio(), new Tenis()); 
print "<h3>Descrição de Produtos</h3>"; 
print "<ul>"; 
foreach($produtos as $objetoProduto) { 
print "<li>" . $objetoProduto->getDescricao() . "</li>"; 
} 
print "</ul>"; 
?>
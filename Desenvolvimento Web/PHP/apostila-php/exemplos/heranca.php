<?php 
 
// Classe Para carrinho de compras que somente salva, remove e devolve os items 
// armazenados 
 
class CarrinhoCompra 
{ 
    var $listaProdutos; 
 
    function salvar($produto, $quantidade) 
    { 
        $this->listaProdutos[$produto] += $quantidade; 
    } 
    function remover($produto, $quantidade) 
    { 
        if($this-> listaProdutos[$produto] > $quantidade) 
            $this-> listaProdutos[$produto] -= $quantidade; 
        else 
            $this-> listaProdutos[$produto] = 0; 
    } 
    function getListaProdutos() 
    { 
        return $this->listaProdutos; 
    } 
} 
 
// Classe que melhora a classe anterior, implementando operação de pesquisa e impressão do carrinho 
 
class MeuCarrinhoCompra extends CarrinhoCompra 
{ 
    function pesquisar($produto) 
    { 
        $produtos = $this->getListaProdutos(); 
        return $produtos[$produto]; 
    } 
    function imprimeTabelaProdutos() 
    { 
?> 
    <TABLE BORDER="1"> 
    <TR> 
        <TH>Produto</TH> 
        <TH>Quantidade</TH> 
    </TR> 
<? 
    foreach($this->getListaProdutos() as $produto => $quantidade) 
    { 
?> 
    <TR> 
        <TD><?= $produto ?></TD> 
        <TD><?= $quantidade ?></TD> 
    </TR> 
<? 
    }  //fim foreach 
?> 
    </TABLE> 
<? 
    } //fim da função 
 
} //fim da classe 
 
 
//Fluxo principal do programa 
$carrinho = new MeuCarrinhoCompra(); 
 
$carrinho->salvar("Camiseta", 7); 
$carrinho->salvar("Bermuda", 2); 
$carrinho->remover("Camiseta", 1); 
 
print "Quantidade de Camisetas: " . $carrinho -> pesquisar("Camiseta"); 
$carrinho->imprimeTabelaProdutos(); 
?>
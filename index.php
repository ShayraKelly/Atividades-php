<?php

include("Venda.php");
include("Produto.php");

$venda = new Venda();
$venda->gerarProduto();
$venda->Imprimir();
$venda->calcValor();

?>
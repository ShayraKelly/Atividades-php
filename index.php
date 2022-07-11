<?php

include("Venda.php");
include("Produtos.php");

$venda = new Venda();

$venda1 = new Venda();
$venda1->gerarProdutos();
echo $venda1->Paga();
echo $venda1->PrazoPaga();
echo $venda1->NaoPaga();
echo "====================== <br>";
echo "<strong>Soma Total</strong><br>";
echo "R$ " . $venda1->getvalor_calc();

?>
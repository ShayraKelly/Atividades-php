<?php
class Venda{
    public $produto;
    public $valor;

    public function calcValor(){
        for($x = 1; $x <= 2; $x++){
            $this->valor = $this->valor + $this->produto[$x]->Calcular();
        }
        echo "Valor Total: " . $this->valor;
    }

    public function Imprimir(){
        for($y = 1; $y <= 2; $y++){
            echo "Produtos <br><br> Código do produto: ";
            echo $this->produto[$y]->id . "<br>Produto: ";
            echo $this->produto[$y]->nome . "<br>Preço: ";
            echo $this->produto[$y]->preco . "<br>Quantidade: ";
            echo $this->produto[$y]->quantidade . "<br><br>";
        }
    }

    public function gerarProduto(){
        $this->produto[1] = new Produto();
        $this->produto[1]->id = 2;
        $this->produto[1]->nome = "Sorvete";
        $this->produto[1]->preco = 6;
        $this->produto[1]->quantidade = 10;

        $this->produto[2] = new Produto();
        $this->produto[2]->id = 1;
        $this->produto[2]->nome = "Milkshake";
        $this->produto[2]->preco = 10;
        $this->produto[2]->quantidade = 5;
    }

}

?>
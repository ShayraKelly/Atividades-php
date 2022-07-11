<?php

class Venda{
    public $produto;
    public $soma_valor;
    public $venda;

    public function getvalor_calc(){
        for($i = 1; $i <= 4; $i++){
            $this->soma_valor = $this->soma_valor + $this->produto[$i]->getCalc();
        }
        return $this->soma_valor;
    }

    public function NaoPaga(){
        for($i = 1; $i <= 4; $i++){
            if($this->produto[$i]->info_venda == 1){
                echo "ID: " . $this->produto[$i]->id;
                echo "<br>Nome: " . $this->produto[$i]->nome;
                echo "<br>Valor: " . $this->produto[$i]->valor;
                echo "<br>Quantidade: " . $this->produto[$i]->qtd;
                echo "<strong><br>Venda à Prazo não paga<br></strong>";
                echo "<br><br>";
            }
        }
    }

    public function PrazoPaga(){
        for($i = 1; $i <= 4; $i++){
            if($this->produto[$i]->info_venda == 2){
                echo "ID: " . $this->produto[$i]->id;
                echo "<br>Nome: " . $this->produto[$i]->nome;
                echo "<br>Valor: " . $this->produto[$i]->valor;
                echo "<br>Quantidade: " . $this->produto[$i]->qtd;
                echo "<strong><br>Venda à Prazo paga<br></strong>";
                echo "<br><br>";
            }
        }
    }

    public function Paga(){
        for($i = 1; $i <= 4; $i++){
            if($this->produto[$i]->info_venda == 3){
                echo "ID: " . $this->produto[$i]->id;
                echo "<br>Nome: " . $this->produto[$i]->nome;
                echo "<br>Valor: " . $this->produto[$i]->valor;
                echo "<br>Quantidade: " . $this->produto[$i]->qtd;
                echo "<strong><br>Venda paga<br></strong>";
                echo "<br><br>";
            }
        }
    }

    public function gerarProdutos(){
        $this->produto[1]= new Produtos();
        $this->produto[1]->id = 1;
        $this->produto[1]->nome = "Sorvete";
        $this->produto[1]->valor = 5;
        $this->produto[1]->qtd = 10;
        $this->produto[1]->info_venda = 1;

        $this->produto[2] = new Produtos();
        $this->produto[2]->id = 2;
        $this->produto[2]->nome = "MilkShake";
        $this->produto[2]->valor = 10;
        $this->produto[2]->qtd = 6;
        $this->produto[2]->info_venda = 2;

        $this->produto[3] = new Produtos();
        $this->produto[3]->id = 3;
        $this->produto[3]->nome = "Picolé";
        $this->produto[3]->valor = 3;
        $this->produto[3]->qtd = 15;
        $this->produto[3]->info_venda = 3;

        $this->produto[4] = new Produtos();
        $this->produto[4]->id = 4;
        $this->produto[4]->nome = "Laranjinha";
        $this->produto[4]->valor = 1.50;
        $this->produto[4]->qtd = 5;
        $this->produto[4]->info_venda = 2;
    }
}

?>
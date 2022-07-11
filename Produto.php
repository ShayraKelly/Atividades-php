<?php
class Produto{
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $valorCalc;

    public function Calcular(){
        $this->valorCalc = $this->preco * $this->quantidade;
        return $this->valorCalc;
    }
}

?>
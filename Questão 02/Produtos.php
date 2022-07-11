<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $qtd;
    public $info_venda;
    public $valor_calc;

    public function getCalc(){
        $this->valor_calc = $this->valor * $this->qtd;
        return $this->valor_calc;
    }
}

?>
<?php

class Funcionario {
    public $nome='lucas';
    public $telefone='99 92345992';
    public $numFilhos=99;

    function resumirCardFunc () {
        return "$this->nome possui $this->numFilhos filhos";
    }

    
    function modificarNumFilhos($numFilhos) {
        return  $this->numFilhos = $numFilhos;
    }
}
 $y= new Funcionario();
 $y->modificarNumFilhos(2) . '<br />';
echo $y-> resumirCardFunc();

?>

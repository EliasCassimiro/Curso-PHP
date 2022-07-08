<div class="titulo">Construtor & Destrutor</div>

<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome, $idade){
            echo 'Construtor Invocado!! <br>';
            $this -> nome = $novoNome;
            $this -> idade = $idade;
        }

        function __destruct(){
            echo 'E Morreu!!';
        }

        public function apresentar(){
            echo "{$this -> nome}, {$this -> idade} anos<br>";
        }
    }

    $pessoa = new Pessoa('Rebeca Maria', 40);
    $pessoa -> apresentar();
    unset($pessoa);
    
    echo '<br>';
    echo '<br>';
    
    $pessoa2 = new Pessoa('João Pedro', 13);
    $pessoa2 -> apresentar();
    $pessoa2 = null;
?>
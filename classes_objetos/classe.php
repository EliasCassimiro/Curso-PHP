<div class="titulo">Primeira Classe</div>

<?php
    class Cliente{
        //atributo
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            echo "Nome: {$this -> nome}<br>";
            echo "Idade: {$this -> idade}<br>";

            /*return "Nome: {$this -> nome}<br>";
            return "Idade: {$this -> idade}<br>";*/
        }
    }

    $c1 = new Cliente();
    echo $c1 -> nome,'<br>';
    $c1 -> nome = 'Ana Silva';
    echo $c1 -> nome,'<br>';
    $c1 -> idade = 20;
    $c1 -> apresentar();

    $c2 = new Cliente();
    $c2 -> nome = 'Gabriel';
    $c2 -> idade = 45;
    $c2 -> apresentar();

    /*echo $c1 -> apresentar(), '<br>;
    echo $c2 -> apresentar(), '<br>;*/
?>
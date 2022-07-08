<div class="titulo">Desafio Data</div>

<?php

    class Data{
        public $dia = 01;
        public $mes = 01;
        public $ano = 1970;

        public function apresentar(){
            echo "Data: {$this -> dia}/{$this -> mes}/{$this -> ano}<br>";
        }
    }

    $c1 = new Data();
    $c1 -> apresentar();

    $c2 = new Data();
    $c2 -> dia = 2;
    $c2 -> mes = 4;
    $c2 -> ano = 2001;
    $c2 -> apresentar();

?>

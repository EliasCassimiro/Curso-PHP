<div class="titulo">Traits #02</div>

<?php


    trait validacao1 {
        public function validarString($str){
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor1{
        public function validarString($str){
            return isset($str) && trim($str);
        }
    }

    class Usuario2{
        use validacao1, validacaoMelhor1{
            validacaoMelhor1::validarString insteadOf validacao1;
            validacao1::validarString as validacaoSimples;
        }
    }

    $usuario1 = new Usuario2();
    var_dump($usuario1 -> validacaoSimples(' '));
    echo '<br>';
    var_dump($usuario1 -> validarString(' '));
    echo '<br>'
?>
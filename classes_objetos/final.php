<div class="titulo">Modificador Final</div>

<?php
    abstract class Abstrata{
        abstract public function metodo1();

        public final function metodo2(){
            echo 'Não vou mudar!<br>';
        }
    }

    class Classes extends Abstrata{
        public function metodo1(){
            echo 'Excutando método 1<br>';
        }

        /*public function metodo2(){
            echo 'Excutando método 2<br>';
        }*/
    }

    $classe = new Classes();
    $classe -> metodo1();
    $classe -> metodo2();


    final class Unica {
        public $att = "Valor Unico";
    }

    $unica = new Unica();
    echo $unica -> att;
    /*class Duplicata extends Unica{
        public $att2;
    }*/
?>

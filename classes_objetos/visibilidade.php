<div class="titulo">Visibilidade</div>

<?php
    class A{
        public $publico = 'Publico';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            echo "Class A: <br>";
            echo "a) Publico: {$this -> publico}<br>";
            echo "b) Protegido: {$this -> protegido}<br>";
            echo "c) Privado: {$this -> privado}<br>";
            echo "<br>";
        }

        private function naoMostrar(){
            echo 'Não vai imprimir!!!<br>'; 
        }
    }

    $a = new A(); 
    $a -> mostrarA();

    class B extends A{
        public function mostrarB(){
            echo "Class B: <br>";
            echo "a) Publico: {$this -> publico}<br>";
            echo "b) Protegido: {$this -> protegido}<br>";
            echo "c) Privado: {$this -> privado}<br>";
            echo "<br>";
        }
    }

    $b = new B();
    $b -> mostrarB();

?>
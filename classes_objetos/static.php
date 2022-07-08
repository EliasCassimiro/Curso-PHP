<div class="titulo">Membros Estáticos</div>

<?php
    class A{
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe(estática)';

        public function mostrarA(){
            echo "Não estático: {$this -> naoStatic}<br>";
            
            //Tentativa 1
            //echo "Estático: {$this -> static}<br>"; 
            
            //Tentativa 2
            echo "Estático: " . self::$static . "<br>";
        }

        public static function mostrarStaticA(){
           // echo "Não Estático: {$this -> naoStatic}<br>";
           // echo "Estático: {$static}<br>";
           echo "Estático: " . self::$static . "<br>";
        }
    }

    $objetoA = new A();
    $objetoA -> mostrarA();
    $objetoA -> mostrarStaticA();//não é a forma ideal
    echo '<br>';
    
    //acessar função estatica diretamente pela classe
    echo A::$static, '<br>';
    A::mostrarStaticA();
    echo '<br>';

    A::$static = "Alterado membro de classe";
    echo A::$static, '<br>';
?>
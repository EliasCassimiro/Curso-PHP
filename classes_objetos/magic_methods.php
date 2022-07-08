<div class="titulo">Métodos Mágicos</div>

<?php
    class PessoaNova{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            echo 'Construtor invocada!!<br>';
            $this -> nome = $nome;
            $this -> idade = $idade; 
        }

        function __destruct(){
            echo 'E morreu!!';
        }

        public function __toString(){
            return "{$this -> nome} tem {$this -> idade} anos.";
        }

        public function apresentar(){
            echo $this . "<br>";
        }

        public function __get($atrib){
            echo "Lendo atributo não declarado: {$atrib}<br>"; 
        }

        public function __set($atrib, $valor){
            echo "Alterando atributo não declarado: {$atrib}/{$valor}";
        }

        public function __call($metodo, $params){
            echo "Tentando executar método ${metodo}";
            echo ", com os parametros: ";
            print_r($params);
        }
    }

    $pessoaNova = new PessoaNova('Ricardo', 40); //__construct
    $pessoaNova -> apresentar();//chamando o __toString
    echo '<br>', $pessoaNova;//chamando o __toString
   
    echo '<br>';
    echo $pessoaNova -> nomeCompleto;//chamando o __get
    $pessoaNova -> nomeCompleto = 'Muito Legal!!';//chamando o __set
    echo '<br>';
    $pessoaNova -> exec();//chamando o__call
    echo '<br>';
    $pessoaNova = null; //__destruct

?>
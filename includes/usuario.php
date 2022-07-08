<?php
require_once('pessoa.php');
class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        /*$this -> nome = $nome;
        $this -> idade = $idade;*/
        parent::__construct($nome, $idade);
        $this -> login = $login;
        echo "Usuario Criado!!<br>";
    }

    function __destruct(){
        echo 'Usuario diz: Tchauuu!!<br>';
        parent::__destruct();
    }

    public function apresentar(){
        echo "@{$this -> login}: ";
        parent::apresentar();
        //echo "@{$this -> login}: {$this -> nome}, {$this -> idade} anos";
    }
}
?>
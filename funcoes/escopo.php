<div class="titulo">Funções & Escopo</div>

<?php
    function imprimirMensagens(){
        echo "Olá!!";
        echo "Até a próxima!<br>";
    }

    imprimirMensagens();

    $variavel = 1;
    echo "<hr>";
    function trocaValor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: $variavel <br>";

    echo "<hr>";
    function trocaValorDeVerdade(){
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel <br>";

    var_dump(trocaValorDeVerdade());
?>
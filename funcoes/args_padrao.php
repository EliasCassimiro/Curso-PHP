<div class="titulo">Argumentos Padrão</div>

<?php
    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
        echo "Bem Vindo(a) $nome $sobrenome!! <br>";
    }

    echo saudacao();
    echo saudacao(NULL);
    echo saudacao(NULL, NULL);
    echo saudacao('Mestre', 'Supremo');

    echo '<br>';

    function anotarPedido($comida, $bebida = 'Agua'){
            echo "Para comer: $comida <br>";
            echo "Para beber: $bebida <br>";
    }

    anotarPedido('Hamburguer');
    anotarPedido('Pizza', 'Refrigerante');

    echo '<br>';

    function anotarPedido2($bebida = "Agua", $comida){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    //anotarPedido2('hamburguer');
    anotarPedido2('Regrigerante2', 'Pizza2');
?>
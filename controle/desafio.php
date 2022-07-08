<div class="titulo">Desafio Pi</div>

<?php

    echo pi();
    $pi = 3.14;

    if($pi == pi()){
        echo "<br>Iguais";
    }else{
        echo"<br>Diferentes";
    }

    echo "<br>Operador Relacional<br>";
    $pierrado = 2.8;
    
    echo "<br>" . ($pi - pi());
    echo "<br>" . ($pi - $pierrado);

    if($pi - pi() <= 0.01){
        echo "<br>Praticamente iguais";
    }

    if($pi - $pierrado <= 0.01){
        echo "<br>Praticamente iguais";
    }else {
        echo "<br>Valor errado";
    }

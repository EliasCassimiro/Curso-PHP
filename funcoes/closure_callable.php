<div class="titulo">Closure & Callable</div>

<?php
     $soma1 = function($a, $b){
         return $a + $b;
     };

     function soma2($a, $b) {
         return $a + $b;
     }

     echo $soma1(2, 3) . ' ';
     echo (is_callable ($soma1) ? 'Sim' : 'Não') . '<br>';

     echo soma2(2, 3) . ' ';
     echo (is_callable ($somar2) ? 'Sim' : 'Não') . '<br>';

    /* $soma1 = 1;
     echo is_callable ($soma1) ? 'Sim' : 'Não' . '<br>';*/

     var_dump($soma1);


     function executar($a, $b, $op, callable $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    };

    executar(2, 3, '+', $soma1);


    function executar2($a, $b, $op, Closure $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    };

    executar2(2, 3, '+', $soma1);
    executar2(100, 100, '+', $soma1);
?> 
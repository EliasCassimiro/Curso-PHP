<div class="titulo">Variáveis</div>

<?php 
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);

    echo '<br>';
    $A = 3;
    echo $A;
    echo '<br>';
    $B = 16;
    echo $B;
    echo '<br>';
    $soma = $A + $B;
    echo "$A + $B";
    echo '<br>';
    echo $soma;
    echo '<br>';
    echo isset($soma);
    echo '<br>';
    unset($soma);
    echo !isset($soma);
    echo '<br>';
    var_dump($soma);

    $variavel = 10;
    echo '<br>' .  $variavel;

    $variavel1= "Agora sou uma string";
    echo '<br>' .  $variavel1;

    //nome de variaveis
    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $_var_4 = 'valida';
    $vâr5 = 'valida';//evitar usa
    //$6var = 'invalido';
    //$%var7 = ' invalido';
    //$var8% = 'invalida';

    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]);

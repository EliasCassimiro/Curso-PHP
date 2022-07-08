<div class="titulo">Valor VS Referência</div>

<?php 
    $variavel = 'valor inicial';
    echo $variavel;

    //atribuição por valor
    $variavelValor = $variavel;
    echo "<br> $variavelValor";
    $variavelValor = 'Novo Valor';
    echo "<br> $variavel";
    echo "<br> $variavelValor";

    //atribuição por Referência
    $valorReferencia = &$variavel;
    $valorReferencia = 'recebe mesma referencia';

    echo "<br> $variavel $valorReferencia";
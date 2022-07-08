<?php
    echo 'Carregando: include_once_arquivo.php';

    $variavel = 'Estou definida';
    if(function_exists('soma')){
        function soma($c, $d){
            return $c + $d;
        }
    }

?>
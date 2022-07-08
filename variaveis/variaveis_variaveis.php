<div class="titulo">Variáveis Variáveis</div> 

<?php

    $a = 'valorA';
    $$a =  'valorAA';
    echo "$a <br> {$$a} ${$a}";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita';
    echo "<br> $epa <br> {$$epa} <br> {$$$epa}";
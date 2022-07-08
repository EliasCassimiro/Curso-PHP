<div class="titulo">Operadores Lógicos</div>

<?php
    echo "<strong><p>V ou F</p></strong><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true);

    echo "<p class = 'divisao'><strong>Tabela Verdade 'AND' (E)</p></strong><hr>";

    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    var_dump(false && 3 > 2 && 7 <= 7);
    
    var_dump(true and true);
    var_dump(true and false);
    var_dump(false and true);
    var_dump(false and false);
    var_dump(false and 3 > 2 && 7 <= 7);

    echo "<p class = 'divisao'><strong>Tabela Verdade 'OR' (OU)</p></strong><hr>";

    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);
    
    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);
    
    echo "<p class = 'divisao'><strong>Tabela Verdade 'XOR' (OU Exclusivo)</p></strong><hr>";

    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);
    
    var_dump(true != true);
    var_dump(true != false);
    var_dump(false != true);
    var_dump(false != false);
    
    echo "<p class = 'divisao'><strong>Exemplo</p></strong><hr>";
    $idade = 62;
    $sexo = 'F';
    $pagouPrevidencia = true;
    $criterioHomem = ($idade >= 65 && $sexo === 'M');
    $criterioMulher = ($idade >= 62 && $sexo === 'F');
    $atingiuCriterio = $criterioHomem || $criterioMulher;
    $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
    echo "Pode se Aposentar -> $podeSeAposentar .<br>";
    //$pagouPrevidencia = true;
    //$podeSeAposentar = $pagouPrevidencia && (($idade >= 62 && $sexo === 'F') || ($idade >= 65 && $sexo === 'M'));
    
    if($idade >= 62 && $sexo === 'F'){
        echo "Pode se Aposentar -> $sexo";
    }else if($idade >= 65 && $sexo === 'M'){
        echo "Pode se Aposentar -> $sexo";
    }else{
        echo "Pode trabalha mais um pouco...";
    }
?>

<style>
    p.divisao {
        margin-bottom: 0px;
        font-weight: bold;
    }
    hr {
        margin-top: 0px;
    }
   
</style>
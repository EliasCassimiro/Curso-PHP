<div class="titulo">Tipos Booleanos</div>
<?php 
    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('true');
    echo '<br>' . is_bool(true);
    echo '<br>' . is_bool('true');

    //fazer as regras de conversões
    echo '<p>Regras<p>';
    echo '<br>' . var_dump((bool) 0);//apenas zero é falso
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) 0.0);
    echo '<br>' . var_dump((bool) 0.0000000001);
    echo '<br>' . var_dump((bool) " ");//o resto é tudo true
    echo '<br>' . var_dump((bool) "00");
    echo '<br>' . var_dump((bool) "");//falso
    echo '<br>' . var_dump((bool) "0");//falso

    echo '<br>' . var_dump((bool) "false");
    echo '<br>' . var_dump(!!"false");
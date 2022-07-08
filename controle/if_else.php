<div class="titulo">If/Else</div>

<?php
    if(true){
        echo "Serei impresso<br>";
        echo "serie impresso novamente<br>";
    }
    if(false){
        echo "Serei impresso";
    }

    if(true){
        echo "Verdadeiro<br>";
    }else{
        echo "Falso<br>";
    }
    echo "Fim<br>";
    if(false){
        echo "Verdadeiro - Parte A<br>";
        echo "Verdadeiro - Parte B<br>";
    }else{
        echo "Falso - Parte A<br>";
        echo "Falso - Parte B<br>";
    }
    echo "Fim<br>";

    if(false){
        echo "Passo A<br>";
    }else if(true){
        echo "Passo B<br>";
    } else {
        echo "Ultimo Passo<br>";
    }

    echo "Fim<br>";

    if(true){//false

    }else {
        if(true){//false

        }else{
            //ponto
            echo "Aqui<br>";
        }
    }
 
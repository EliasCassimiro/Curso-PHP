<div class="titulo">While/Do While</div>

<?php 
     const Valor_Limite = 5;
     $contador = 0;

     while($contador < Valor_Limite){
         echo "while $contador <br>";
         $contador++;
     }

    /*do{
        echo "while $contador <br>";
        $contador++;
    } while($contador < Valor_Limite);*/

    $contador = 0;
    do{
        echo "do while $contador <br>";
        $contador++;
    }while($contador < Valor_Limite);

    $contador = 0;
    while(true){
        echo "while(true) $contador <br>";
        $contador++;
        if($contador >= Valor_Limite) break;
    }    
?>
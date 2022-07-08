<div class="titulo">Array Constantes</div>

<?php
    const Frutas = array('laranjas', 'abacaxi');
    //Frutas[0] = 'banana';
    //Frutas[] = 'banana';

    echo Frutas[0];

    const Carros = ["Fiat" => "Uno", "Ford" => "Fiesta"];
    //Carros["BMW"] = '325i';
    echo '<br>'  . Carros["Fiat"];

    define('Cidades', array('Belo Horizontes', 'Recife'));
    Cidades[0] = 'Rio de Janeiro';
    echo'<br>' . Cidades[1];
?>

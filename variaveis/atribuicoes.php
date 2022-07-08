<div class="titulo">Atribuições</div>

<?php  
$title = 'Atribuições';
$numero = 10;

echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>';
$numero--;//$numero = $numero - 1;
--$numero;//$numero = $numero - 1;
$numero = $numero - 1;
echo '<br>' . $numero;
$numero++;//$numero = $numero + 1;
++$numero;//$numero = $numero + 1;
echo '<br>' . $numero;
echo '<br>';
$numero = 20;
$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 6;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;
$numero .= 4; //apenas concatenação
echo '<br>' . $numero;
echo '<br>';
$texto = "esse é um texto";
echo '<br>' . $texto;
$texto = ' qualquer';
echo '<br>' . $texto . ' qualquer';
$texto = ' de verdade';
echo '<br>' . $texto ;

$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
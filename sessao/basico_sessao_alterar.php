<?php
    session_start();
    print_r($_SESSION);
?>

<p><b>Nome: </b><?= $_SESSION['Nome'] ?></p>
<p><b>Email: </b><?= $_SESSION['Email'] ?></p> 

<?php
    $_SESSION['Email'] = 'gabrielfilho@emailaz.com.br'
?>

<p><a href="basico_sessao.php">Voltar</a></p>
<p><a href="basico_sessao_limpar.php">Limpar Sessão</a></p>
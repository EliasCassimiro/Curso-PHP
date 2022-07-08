<div class="titulo">Sessão</div>

<?php
    session_start();
    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['Nome']){
        $_SESSION['Nome'] = 'Gabriel';

    }

    if(!$_SESSION['Email']){
        $_SESSION['Email'] = 'gabriel@azmail.com';
    }

    print_r($_SESSION);
?>

<p><a href="basico_sessao_alterar.php">Alterar Sessão</a></p>
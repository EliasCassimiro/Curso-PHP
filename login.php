<?php
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']){
        $usuarios = [
            ["nome" => "AlunoCod3r",
             "email" => "aluno@cod3r.com.br",
             "senha" => "123456",
            ],
            ["nome" => "Outro Aluno",
             "email" => "outro@email.com.br",
             "senha" => "654321",
            ]
        ];

        foreach($usuarios as $usuario){
            $emailValido = $email == $usuario['email'];
            $senhaValido = $senha == $usuario['senha'];

            if ($emailValido && $senhaValido){
                $_SESSION['error'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $exp = time() + 60 * 60 * 24 * 30;
                setcookie('usuario', $usuario['nome'], $exp);
                header('Location: index.php');
            }
        }

        if (!$_SESSION['usuarios']){
            $_SESSION['error'] = ['Usuário/Senha inválido!!'];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <title>Curso-PHP</title>
    </head>
    <body class="login">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Seja Bem Vindo</h2>
        </header>
    
        <main class="principal"> 
            <div class="conteudo">
                <h3>Identifique-se</h3>
                <?php if ($_SESSION['error']): ?>
                    <div class="error">
                        <?php foreach ($_SESSION['error'] as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <form action="#" method="post">
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <button>Entrar</button>
                </form>
            </div>
        </main>
    
        <footer class="rodape">
            <!-- ©Copyright --> EliasCassimiro© <?= date('Y'); ?>
        </footer>
    </body>
</html>
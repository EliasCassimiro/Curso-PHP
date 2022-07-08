<div class="titulo">Inserir Registro #01</div>

<?php
    require_once "conexao.php";

    $sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario) 
                VALUES ('João Pereira', 'joaopereira@email.com.br', '1979-02-19', 'https://joaopereira.sites.com.br', 2, 13000.90)";

    $conexao = novaConexao();
    $resultado = $conexao -> query($sql);

    if($resultado){
        echo "Sucesso :)";
    } else {
        echo "Erro: " . $conexao -> error;
    }
?>
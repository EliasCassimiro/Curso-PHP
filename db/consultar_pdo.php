<div class="titulo">PDO: Consultar</div>

<?php
    require_once "conexao_pdo.php";

    $conexao = novaConexao();
    $sql = "SELECT * FROM cadastro";
    $resultado = $conexao -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);

    echo '<hr>';

    $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

    $stmt = $conexao -> prepare($sql);
    $stmt -> bindValue(':qtde', 2, PDO:: PARAM_INT);
    $stmt -> bindValue(':inicio', 3, PDO:: PARAM_INT);

    if($stmt -> execute()){
        $resultado = $stmt -> fetchAll();
        print_r($resultado);
    } else {
        echo "Codigo: " . $stmt -> errorCode();
        print_r($stmt -> errorInfo());
    }

    echo "<hr>";

    $sql = "SELECT * FROM cadastro WHERE id = ?";
    $stmt = $conexao -> prepare($sql);
    //$stmt -> bindValue(':id', 15);
    //if($stmt -> execute([14])){
    //if($stmt -> execute()){
    if($stmt -> execute([':id' => 1])){
        $resultado = $stmt -> fetch();
        print_r($resultado);
    } else {
        echo "Codigo: " . $stmt -> errorCode() . "<br>";
        print_r($stmt -> errorInfo());
    }

    $conexao -> close();
?>
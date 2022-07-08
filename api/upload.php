<div class="titulo">Upload</div>

<?php 
    print_r($_FILES);
    /*print_r($_POST);
    print_r($_GET);*/

    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = '/Users/elias/Desktop';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)){
            echo "<br>Arquivo válido e enviado com sucesso.";
        } else {
            echo "<br>Erro no upload do arquivo";
        }
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>
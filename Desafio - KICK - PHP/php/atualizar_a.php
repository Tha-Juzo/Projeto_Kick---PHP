<?php

    include("conexao.php");

    $id_anotacao = $_GET['id_a'];
    $titulo_a = $_POST['i_titulo'];
    $descricao_a = $_POST['i_descricao'];

    $query_1 = "update anotacao set titulo = '{$titulo_a}', descricao = '{$descricao_a}' where id_anotacao = '{$id_anotacao}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_a.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="listar_a.php">Voltar</a>
        <?php
    }

?>
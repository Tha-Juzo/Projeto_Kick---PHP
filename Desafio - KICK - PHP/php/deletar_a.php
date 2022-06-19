<?php

    include("conexao.php");

    $id_anotacao = $_GET['id_a'];
    $query_1 = "delete from anotacao where id_anotacao = '{$id_anotacao}'";

    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_a.php');
    }else{
        ?>
        <h1>Erro ao deletar o registro!</h1>
        <a href="listar_a.php">Voltar</a>
        <?php
    }

?>
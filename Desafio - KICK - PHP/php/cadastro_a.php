<?php

    session_start();
    include("conexao.php");
    
    if(isset($_SESSION['usuario'])){

        $fk_usuario = $_SESSION['usuario'];
        $titulo_a = $_POST['i_titulo'];
        $descricao_a = $_POST['i_descricao'];

        $query_1 = "insert into anotacao (fk_usuario, titulo, descricao, data_cadastro)
                    values ('{$fk_usuario}', '{$titulo_a}', '{$descricao_a}', NOW())";

        mysqli_query($conexao, $query_1);

    }else{
        header('Location: ../index.php');
    }

?>


<html>

<head>
    <title>Anotação Concluída</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo_concluido.css">
    <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
</head>

<body>
    <div class="box">
        <h1>Anotação Concluída!</h1>
        <a href="painel.php">Voltar</a>
    </div>
</body>

</html>
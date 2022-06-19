<?php
    
    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id_anotacao = $_GET['id_a'];
        $query_1 = "select * from anotacao where id_anotacao = '{$id_anotacao}'";
        $resposta = mysqli_query($conexao, $query_1);

        $row = mysqli_fetch_assoc($resposta);

    }else{
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Editar Anotação</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo_form.css">
        <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
    </head>

    <body>
        <form action="atualizar_a.php?id_a=<?php echo $row['id_anotacao'] ?>" method="post">
            <div class="form_box">

                <h1>Editar Anotação</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" value="<?php echo $row['titulo'] ?>" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="50" rows="15" class="i_area" required><?php echo $row['descricao'] ?></textarea>

                <input type="submit" value="Salvar edição" class="btt_form">

                <a href="listar_a.php">Voltar</a>

            </div>
        </form>
    </body>

</html>
<?php
    include("verifica_usuario.php");
?>

<html>

    <head>
        <title>Nova Anotação</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo_form.css">
        <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
    </head>

    <body>
        <form action="cadastro_a.php" method="post">
            <div class="form_box">

                <h1>Nova Anotação</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="50" rows="15" class="i_area" required></textarea>

                <input type="submit" value="Salvar" class="btt_form">

                <a href="painel.php">Voltar</a>

            </div>
        </form>
    </body>

</html>
<?php session_start(); ?>
<html>

    <head>
        <title>Cadastro de Usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo_form.css">
        <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
    </head>

    <body>
        <form action="php/cadastro_u.php" method="post" enctype="multipart/form-data">
            <div class="form_box">

                <h1>Novo Cadastro</h1>

                <label>Nome</label>
                <input type="text" name="i_nome" class="i_text" required>

                <label>Sobrenome</label>
                <input type="text" name="i_sobrenome" class="i_text" required>

                <label>Nome de Usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>

                <?php if(isset($_SESSION['not_usuario'])){
                ?>

                    <div class="erro_box">
                        Nome de usuário já está em uso!
                    </div>

                <?php 
                } 
                unset($_SESSION['not_usuario']);
                ?>

                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>

                <label>Foto</label>
                <div class="foto_box">
                    O arquivo deve ser jpg, jpeg, png ou gif com tamanho máximo de 2MB!
                </div>
                <input type="file" name="i_foto" class="i_file" required>

                <?php
                if(isset($_SESSION['not_arquivo'])){
                ?>

                    <div class="erro_box">
                        Imagem inválida!
                    </div>

                <?php
                }
                unset($_SESSION['not_arquivo']);
                ?>

                <br>

                <input type="submit" value="Cadastrar" class="btt_form">

                <div class="link_box">
                    <a href="index.php">Voltar</a>
                </div>
                
            </div>
        </form>
    </body>
</html>
<?php session_start(); ?>

<html>

    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo_form.css">
        <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
    </head>

    <body>
        <form action="php/login.php" method="post">
            <div class="form_box">

                <h1>LOGIN</h1>

                <?php
                if(isset($_SESSION['not_autenticado'])){
                ?>
                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>
                <?php
                }
                unset($_SESSION['not_autenticado']);
                ?>

                <label>Usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>

                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>

                <input type="submit" value="Entrar" class="btt_form">

                <div class="link_box">
                    Não possui conta? <a href="cad_usuario.php"> Crie aqui!</a>
                </div>

            </div>
        </form>
    </body>

</html>
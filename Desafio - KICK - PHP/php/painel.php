<?php
    include("verifica_usuario.php");    
?>

<html>

    <head>
        <title>Painel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo_navbar.css">
        <link rel="icon" href="img/Logo - Desafio_KICK.png"/>
    </head>

    <body>
        <nav>
            <ul>
                <li> <img class="avatar" src=" <?php echo $row['foto'] ?>"> </li>
                <li> <a href="perfil.php">Perfil</a> </li>
                <li> <a href="nova_anotacao.php">Nova Anotação</a> </li>
                <li> <a href="listar_a.php">Listar Anotações</a> </li>
                <li id="btt_sair"> <a href="logout.php">Sair</a> </li>
            </ul>
        </nav>
    </body>

</html>
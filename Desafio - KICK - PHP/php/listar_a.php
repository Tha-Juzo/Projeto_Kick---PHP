<?php

    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id = $_SESSION['usuario'];
        $query_1 = "select * from anotacao where fk_usuario = '{$id}'";
        $resposta = mysqli_query($conexao, $query_1);

        if(mysqli_num_rows($resposta) > 0){
            ?>

            <html>

                <head>
                    <title>Anotações</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/estilo_anotacao.css">
                </head>

                <body>
                    
                    <table>

                        <tr class="title_tr">
                            <td colspan="5">Anotações</td>
                        </tr>

                        <tr class="title_tr">
                            <td>Título</td>
                            <td>Descrição</td>
                            <td>Data</td>
                            <td colspan="2">Opções</td>
                        </tr>

                        <?php
                            while($row = mysqli_fetch_assoc($resposta)){
                        ?>

                                <tr class="item_tr">
                                    <td> <?php echo $row['titulo'] ?> </td>
                                    <td> <?php echo $row['descricao'] ?> </td>
                                    <td> <?php echo date("d/m/Y", strtotime($row['data_cadastro'])) ?> </td>

                                    <td>
                                        <a href="editar_anotacao.php?id_a=<?php echo $row['id_anotacao'] ?>">Editar</a>
                                    </td>

                                    <td>
                                        <a href="deletar_a.php?id_a=<?php echo $row['id_anotacao'] ?>">Excluir</a>
                                    </td>

                                </tr>

                            <?php
                        }

                        ?>

                        <tr class="title_tr">
                            <td colspan="5">
                                <a href="painel.php">Voltar</a>
                            </td>
                        </tr>

                    </table>

                </body>

            </html>

            <?php
        }else{
            ?>

            <html>

                <head>
                    <title>Não tem anotações</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/estilo_concluido.css">
                </head>

                <body>
                    <div class="box">
                        <h1> Não existem anotações criadas! </h1>
                        <a href="painel.php">Voltar</a>
                    </div>                    
                </body>

            </html>

            <?php
        }

    }else{
        header('Location: ../index.php');
    }

?>
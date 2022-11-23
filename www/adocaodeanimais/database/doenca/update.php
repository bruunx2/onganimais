<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);     

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE doenca SET 
                                nome = '$nome',
                                descricao = '$descricao',                                

                                                 WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso";
        header('Location: ../../views/doenca/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../views/doenca/list.php');
    endif;
endif;
?>
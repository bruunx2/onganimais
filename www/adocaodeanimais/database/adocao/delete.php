<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-deletar'])):    

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM adocao WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso";
        header('Location: ../../views/adocao/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../../views/adocao/list.php');
    endif;
endif;
?>
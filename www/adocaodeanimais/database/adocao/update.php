<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):     
    $data_adocao = clear($_POST['data_adocao']);
    $id_adotante = clear($_POST['id_adotante']);
    $id_animal = clear($_POST['id_animal']);
    $id_funcionario = clear($_POST['id_funcionario']);

    $id_adocao = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE adocao SET                                 
                                data_adocao = '$data_adocao', 
                                id_adotante = '$id_adotante', 
                                id_animal = '$id_animal', 
                                id_funcionario = '$id_funcionario',
                                
                                WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso";
        header('Location: ../../views/adocao/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../views/adocao/list.php');
    endif;
endif;
?>
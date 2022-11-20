<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $sexo = mysqli_escape_string($connect, $_POST['sexo']);
    $raca = mysqli_escape_string($connect, $_POST['raca']);
    $porte = mysqli_escape_string($connect, $_POST['porte']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE animal SET 
                                nome = '$nome', 
                                idade = '$idade', 
                                sexo = '$sexo', 
                                raca = '$raca', 
                                porte = '$porte' 
                                
                                WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso";
        header('Location: ../../views/animal/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../views/animal/list.php');
    endif;
endif;
?>
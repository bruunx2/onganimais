<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']); 
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE adotante SET 
                                nome = '$nome',
                                data_nascimento = '$data_nascimento', 
                                cpf = '$cpf', 
                                logradouro = '$logradouro', 
                                cidade = '$cidade',
                                bairro = '$bairro',
                                uf   = '$uf',
                                telefone = '$telefone',
                                email = '$email'

                                                 WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso";
        header('Location: ../../views/adotante/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../views/adotante/list.php');
    endif;
endif;
?>
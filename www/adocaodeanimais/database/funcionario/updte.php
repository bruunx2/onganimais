<?php

session_start();
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
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE funcionario SET 
                                nome = '$nome',
                                data_nascimento = '$data_nascimento', 
                                cpf = '$cpf', 
                                logradouro = '$logradouro', 
                                cidade = '$cidade',
                                bairro = '$bairro',
                                uf   = '$uf',
                                telefone = '$telefone',
                                email = '$email'
                                cargo = '$cargo'

                                                 WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso";
        header('Location: ../../views/funcionario/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../views/funcionario/list.php');
    endif;
endif;

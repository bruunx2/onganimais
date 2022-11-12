<?php

session_start();
require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);    
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);  
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);
   

    $sql = "UPDATE funcionario SET 
                                nome = '$nome',                               
                                cpf = '$cpf', 
                                telefone = '$telefone',
                                email = '$email',
                                cep = '$cep',
                                logradouro = '$logradouro', 
                                cidade = '$cidade',
                                bairro = '$bairro',
                                uf   = '$uf',                               
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

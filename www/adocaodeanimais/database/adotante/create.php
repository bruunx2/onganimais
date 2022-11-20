<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';
// Clear
function clear($input) {
    global $connect;
    // slq
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $data_nascimento = clear($_POST['data_nascimento']);
    $cpf = clear($_POST['cpf']);
    $cep = clear($_POST['cep']);
    $logradouro = clear($_POST['logradouro']);
    $cidade = clear($_POST['cidade']);
    $bairro = clear($_POST['bairro']);
    $uf = clear($_POST['uf']);
    $telefone = clear($_POST['telefone']);
    $email = clear($_POST['email']);

    
    $sql = "INSERT INTO adotante (
                                nome, 
                                data_nascimento, 
                                cpf, 
                                cep, 
                                logradouro, 
                                cidade, 
                                bairro,  
                                uf, 
                                telefone, 
                                email
                                ) VALUES (
                                        '$nome', 
                                        '$data_nascimento',
                                        '$cpf', 
                                        '$cep' , 
                                        '$logradouro',
                                        '$cidade' , 
                                        '$bairro', 
                                        '$uf', 
                                        '$telefone', 
                                        '$email'
                                                )";   

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";
        header('Location: ../../views/adotante/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../views/adotante/list.php');
    endif;
endif;
?>
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
    $telefone = clear($_POST['telefone']);
    $email = clear($_POST['email']);
    $logradouro = clear($_POST['logradouro']);
    $cidade = clear($_POST['cidade']);
    $bairro = clear($_POST['bairro']);
    $uf = clear($_POST['uf']);
    $cep = clear($_POST['cep']);
    $cargo = clear($_POST['cargo']);

    
    $sql = "INSERT INTO funcionario (
                            nome, 
                            data_nascimento,
                            cpf,
                            telefone,
                            email,
                            logradouro,
                            cidade,
                            bairro,
                            uf,
                            cep,
                            cargo
                                ) VALUES (
                                    '$nome',
                                    '$data_nascimento',
                                    '$cpf',
                                    '$telefone',
                                    '$email',
                                    '$logradouro',
                                    '$cidade',
                                    '$bairro',
                                    '$uf',
                                    '$cep',
                                    '$cargo'
                                            )";
 

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";
        header('Location: ../../views/funcionario/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../views/funcionario/list.php');
    endif;
endif;
?>
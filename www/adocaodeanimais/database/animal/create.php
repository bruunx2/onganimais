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
    $idade = clear($_POST['idade']);
    $sexo = clear($_POST['sexo']);
    $raca = clear($_POST['raca']);
    $porte = clear($_POST['porte']);
    $id_doenca = clear($_POST['id_doenca']);
    
    $sql = "INSERT INTO animal (
                            nome, 
                            idade, 
                            sexo, 
                            raca, 
                            porte,
                            id_doenca
                                ) VALUES (
                                        '$nome', 
                                        '$idade', 
                                        '$sexo',
                                        '$raca',
                                        '$porte',
                                        '$id_doenca'
                                             )";    

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";
        header('Location: ../../views/animal/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../views/animal/list.php');
    endif;
endif;
?>
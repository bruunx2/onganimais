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
    $data_adocao = clear($_POST['data_adocao']);
    $id_adotante = clear($_POST['id_adotante']);
    $id_animal = clear($_POST['id_animal']);
    $id_funcionario = clear($_POST['id_funcionario']);    
    
    
    $sql = "INSERT INTO adocao (data_adocao,id_adotante, id_animal, id_funcionario)
            VALUES ('$data_adocao','$id_adotante','$id_animal','$id_funcionario')";   

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";
        header('Location: ../../views/adocao/list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../views/adocao/list.php');
    endif;
endif;
?>
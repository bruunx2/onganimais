<?php
// Conexão com o banco de Dados
$servername = "db";
$username = "root";
$password = "root";
$db_name = "adocaodeanimais";

$connect =  new mysqli($servername, $username, $password, $db_name);

mysqli_set_charset($connect, 'UTF-8');

if(mysqli_connect_error()):
    echo "Falha de Conexão".mysqli_connect_error();
endif;

$query = sprintf("SELECT id, data_adocao, id_adotante, id_animal, id_funcionario FROM adocao");
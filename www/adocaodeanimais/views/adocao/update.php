<?php
    include_once '../../database/db_connect.php';
    include_once '../../includes/header.php';

    if (isset($_GET['id'])):
        $id = mysqli_escape_string($connect,$_GET['id']);

        $sql = "SELECT * FROM adotante WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);    
    endif;
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Adotante </h3>
        <form action="../../database/adotante/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="date" name="data_adocao" id="data_adocao">
                <label for="data_adocao">Data de adoção</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="id_adotante" id="id_adotante">
                <label for="id_adotante">Adotante</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="id_animal" id="id_animal">
                <label for="id_animal">Animal</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="id_funcionario" id="id_funcionario">
                <label for="id_funcionario">Funcionario</label>
            </div>

            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Adoções</a>
        </form>
        
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
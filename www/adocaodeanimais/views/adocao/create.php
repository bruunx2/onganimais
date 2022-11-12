<?php
// Header
include_once '../../includes/header.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Cadastro de Adoção! </h3>
        <form action="../../database/adocao/create.php" method="POST">
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
                <input type="text" name="id_funcioanrio" id="id_funcionario">
                <label for="id_funcionario">Funcionario</label>
            </div>
        
            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list.php" class="btn green">Lista de Adoções</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
<?php
// Header
include_once '../../includes/header.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Nova Doença </h3>
        <form action="../../database/doenca/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome da Doença</label>
            </div>            

            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">Descrição da Doença</label>
            </div>

            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list.php" class="btn green">Lista de Doenças</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
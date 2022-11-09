<?php
// Header
include_once '../../includes/header.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Animal </h3>
        <form action="../../database/animal/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sexo" id="sexo">
                <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="raca" id="raca">
                <label for="raca">Raça</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="porte" id="porte">
                <label for="porte">Porte</label>
            </div>

            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="create.php" class="btn green">Lista de Animais</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
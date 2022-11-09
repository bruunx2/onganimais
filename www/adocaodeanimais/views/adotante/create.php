<?php
// Header
include_once '../../includes/header.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light">Adotante</h3>
        <form action="../../database/adotante/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name="data_nascimento" id="data_nascimento">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf">
                <label for="sexo">CPF</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="logradouro" id="logradouro">
                <label for="logradouro">Logradouro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="uf" id="uf">
                <label for="uf">UF</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="create.php" class="btn green">Lista de Adotantes</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
<?php
include_once '../../database/db_connect.php';
include_once '../../includes/header.php';

if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM funcionario WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;




?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar </h3>
        <form action="../../database/funcionario/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $dados['data_nascimento']; ?>">
                <label for="data_nascimento">Data Nascimento</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf']; ?>">
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s6">
                <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cep" id="cep" value="<?php echo $dados['cep']; ?>">
                <label for="cep">CEP</label>
            </div>
    
            <div class="input-field col s6">
                <input type="text" name="uf" id="uf" value="<?php echo $dados['uf']; ?>">
                <label for="uf">UF</label>
                
            </div>
            <div class="input-field col s6">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>">
                <?php echo $endereco->bairro; ?>
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="logradouro" id="logradouro" value="<?php echo $dados['logradouro']; ?>">
                <label for="logradouro">Rua</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cargo" id="cargo" value="<?php echo $dados['cargo']; ?>">
                <label for="cargo">Cargo</label>
            </div>
            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Funcionarios</a>
        </form>
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
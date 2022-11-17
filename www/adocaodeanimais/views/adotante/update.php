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
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $dados['data_nascimento']; ?>">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf']; ?>">
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
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
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="logradouro" id="logradouro" value="<?php echo $dados['logradouro']; ?>">
                <label for="logradouro">Rua</label>
            </div>

            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Animais</a>
        </form>
        
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
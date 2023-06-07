<?php
// Header
include_once '../../includes/header.php';
include_once '../../database/db_connect.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Animal </h3>
        <form action="../../database/animal/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s3">
                <input type="number" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <div class="input-field col s3">
                <input type="text" name="sexo" id="sexo">
                <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="raca" id="raca">
                <label for="raca">Raça</label>
            </div>          

            <div class="input-field col s12">
                <input type="text" name="porte" id="porte">
                <label for="porte">Porte</label>
            </div>

            <div class="input-field col s12">
                <select id="id_doenca" name="id_doenca">
                    <option disabled selected>Escolha a Doença</option>
                    <?php
                        $sql = "SELECT * FROM doenca";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
                <label for="doenca">Doença</label>
            </div>

            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list.php" class="btn green">Lista de Animais</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
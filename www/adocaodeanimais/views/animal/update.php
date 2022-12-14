<?php
// Conexão
include_once '../../database/db_connect.php';
// Header
include_once '../../includes/header.php';
// Select
if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);

    $sql = "SELECT * FROM animal WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);    
endif;
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Animal </h3>
        <form action="../../database/animal/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">idade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sexo" id="sexo" value="<?php echo $dados['sexo']; ?>">
                <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="raca" id="raca" value="<?php echo $dados['raca']; ?>">
                <label for="raca">Raca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="porte" id="porte" value="<?php echo $dados['porte']; ?>">
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

            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Animais</a>
        </form>
        
    </div>
</div>

<?php
// Footer
include_once '../../includes/footer.php';
?>
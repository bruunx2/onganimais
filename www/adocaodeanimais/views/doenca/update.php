<?php
    include_once '../../database/db_connect.php';
    include_once '../../includes/header.php';

    if (isset($_GET['id'])):
        $id = mysqli_escape_string($connect,$_GET['id']);

        $sql = "SELECT * FROM doenca WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);    
    endif;
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Doença </h3>
        <form action="../../database/doenca/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>            
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
                <label for="descricao">Descrição</label>
            </div>           
           
            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Doenças</a>
        </form>
        
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
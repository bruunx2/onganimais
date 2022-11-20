<?php
    include_once '../../database/db_connect.php';
    include_once '../../includes/header.php';

    if (isset($_GET['id'])):
        $id = mysqli_escape_string($connect,$_GET['id']);

        $sql = "SELECT * FROM adocao WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);    
    endif;
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Adoção </h3>
        <form action="../../database/adocao/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

            <div class="input-field col s12">                
                <select name="id" id="id">                    
                    <option  disabled selected>Escolha o adotante</option>               
                    <?php
                        $sql = "SELECT * FROM adocao;";                      
                        $resultado = mysqli_query($connect, $sql);                    
                        while($dados = mysqli_fetch_array($resultado)):                        
                    ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['id'];            
                    ?></option>                    
                    <?php
                        endwhile;
                    ?>                   
                </select>
            </div>

            <div class="input-field col s12">
                <input type="date" name="data_adocao" id="data_adocao">
                <label for="data_adocao">Data de adoção</label>
            </div>

            <div class="input-field col s12">                
                <select name="id_adotante" id="id_adotante">                    
                    <option  disabled selected>Escolha o adotante</option>               
                    <?php
                        $sql = "SELECT * FROM adotante;";                      
                        $resultado = mysqli_query($connect, $sql);                    
                        while($dados = mysqli_fetch_array($resultado)):                        
                    ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome'];            
                    ?></option>                    
                    <?php
                        endwhile;
                    ?>                   
                </select>
            </div>

            <div class="input-field col s12">
                <select id="id_animal" name="id_animal">
                    <option disabled selected>Escolha o animal</option>
                    <?php
                        $sql = "SELECT * FROM animal";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
                <label for="animal">Animal</label>
            </div>

            <div class="input-field col s12">
                <select id="id_funcionario" name="id_funcionario">
                    <option disabled selected>Escolha o funcionário</option>
                    <?php
                        $sql = "SELECT * FROM funcionario";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
                <label for="funcionario">Funcionário</label>
            </div>

            <button type="submit" name="btn-editar" id="btn-editar" class="btn">Atualizar</button>
            <a href="list.php" class="btn green">Lista de Adoções</a>
        </form>
        
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
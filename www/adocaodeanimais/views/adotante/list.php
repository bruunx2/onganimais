<?php
// Conexão
include_once '../../database/db_connect.php';
// Header
include_once '../../includes/header.php';
// Mensagem
include_once '../../includes/mensage.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Listagem de Adotantes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM adotante";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :

                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['cpf']; ?></td>
                            <td><?php echo $dados['cidade']; ?></td>
                            <td><?php echo $dados['uf']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td><?php echo $dados['email']; ?></td>


                            <td><a href="update.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                            <td><a href="#modal <?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal <?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Aviso</h4>
                                    <p>tem certeza que deseja excluir esse adotante?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="../../database/adotante/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" id="btn-deletar" class="btn red">Sim, deletar!</button>

                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

                                    </form>

                                </div>
                            </div>
                        </tr>
                    <?php
                    endwhile;
                else :
                    ?>

                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td> 
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>
        </table>
        <br>
        <a href="create.php" class="btn">Adicionar Adotante</a>

        <?php
        // Footer
        include_once '../../includes/footer.php';
        ?>
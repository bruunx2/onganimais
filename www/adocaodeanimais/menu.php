<?php
// Header
include_once 'includes/header.php';
?>

    <!-- ADOÇÃO -->
    <div> 
        <form action="views/animal/create.php">
        <input type="submit" class="waves-effect waves-light btn" value="Cadastrar Animal" />          
        </form>
        
        <form action="views/animal/list.php">
        <input type="submit" class="waves-effect waves-light btn" value="Listar Animais" />
        </form>        
    </div>

    <!-- ADOTANTE -->
    <div> 
        <form action="views/adotante/create.php">
        <input type="submit" class="waves-effect waves-light btn" value="Adotante" />          
        </form>
        
        <form action="views/adotante/list.php">
        <input type="submit" class="waves-effect waves-light btn" value="Listagem de Adotantes" />
        </form>
    </div>

    <!-- ANIMAL -->
    <div> 
        <form action="views/animal/create.php">
        <input type="submit" class="waves-effect waves-light btn" value="Novo Animal" />          
        </form>
        
        <form action="views/animal/list.php">
        <input type="submit" class="waves-effect waves-light btn" value="Animais Cadastrados" />
        </form>        
    </div>

    <!-- FUNCIONARIO -->
    <div> 
        <form action="views/funcionario/create.php">
        <input type="submit" class="waves-effect waves-light btn" value="Novo Funcionario" />          
        </form>
        
        <form action="views/funcionario/list.php">
        <input type="submit" class="waves-effect waves-light btn" value="Listagem de Funcionarios" />
        </form>        
    </div> 

<?php
// Footer
include_once 'includes/footer.php';
?>
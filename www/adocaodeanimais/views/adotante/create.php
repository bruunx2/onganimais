<?php include_once '../../includes/header.php';?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light">Adotante</h3>
        <form action="../../database/adotante/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6 ">
                <input type="date" name="data_nascimento" id="data_nascimento">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>
            <div class="input-field col s6 ">
                <input type="text" name="cpf" id="cpf">
                <label for="cpf">CPF</label>
            </div>
            <!-- TODO Diminuir input -->
            <div class="input-field col s6 ">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s6 ">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s8">
                <input type="text" name="cep" id="cep" >
                <label for="cep">CEP</label>
            </div>
            <div class="input-field col s4">
                <select id="uf" name="uf">
                    <label for="uf">UF</label>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="bairro" id="bairro">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="logradouro" id="logradouro">
                <label for="logradouro">Rua</label>
            </div>
            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list.php" class="btn green">Lista de Adotantes</a>
        </form>
        
    </div>
</div>

<?php include_once '../../includes/footer.php';?>
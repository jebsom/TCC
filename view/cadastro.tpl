<form method="post" action="cadastro">
    <div class="form-row">
        <legend  class="w-auto">Dados Pessoais</legend>
        <div class="col-md-4">
            <label for="cli_nome">Nome</label>
            <input type="text" class="form-control" id="cli_nome" name="cli_nome" placeholder=" ">
        </div>
        <div class="col-md-4">
            <label for="cli_sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="cli_sobrenome" name="cli_sobrenome"  placeholder=" ">
        </div>
        <div class="col-md-4">
            <label for="cli_data_nasc">Data Nascimento</label>
            <input type="date" class="form-control" id="cli_data_nasc" name="cli_data_nasc"  >
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3">
            <label for="cli_rg">RG</label>
            <input type="text" class="form-control" id="cli_rg" name="cli_rg" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="cli_cpf">CPF</label>
            <input type="text" class="form-control" id="cli_cpf" name="cli_cpf"  placeholder="">
        </div>
        <div class="col-md-1">
            <label for="cli_ddd">DDD</label>
            <input type="text" class="form-control" id="cli_ddd" name="cli_ddd"  placeholder="">
        </div>
        <div class="col-md-2">
            <label for="cli_fone">Fone</label>
            <input type="text" class="form-control" id="cli_fone" name="cli_fone"  placeholder="">
        </div>
        <div class="col-md-3">
            <label for="cli_celular">Celular</label>
            <input type="text" class="form-control" id="cli_celular" name="cli_celular" aplaceholder=" ">
        </div>
    </div>
    <div class="form-row">
        <legend  class="w-auto">Endereços</legend>
        <div class="col-md-5">
            <label for="cli_endereco">Rua/Logradouro</label>
            <input type="text" class="form-control" id="cli_endereco" name="cli_endereco"  placeholder=" ">
        </div>
        <div class="col-md-2">
            <label for="cli_numero">Nº</label>
            <input type="text" class="form-control" id="cli_numero" name="cli_numero"  placeholder=" ">
        </div>
        <div class="col-md-5">
            <label for="cli_bairro">Bairro</label>
            <input type="text" class="form-control" id="cli_bairro" name="cli_bairro"  placeholder=" ">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-5">
            <label for="cli_cidade">Cidade</label>
            <input type="text" class="form-control" id="cli_cidade" name="cli_cidade"  placeholder=" ">
        </div>
        <div class="col-md-2">
            <label for="cli_uf">UF</label>
            <input type="text" class="form-control" id="cli_uf" name="cli_uf"  placeholder=" ">
        </div>
        <div class="col-md-5">
            <label for="cli_cep">CEP</label>
            <input type="text" class="form-control" id="cli_cep" name="cli_cep"  placeholder=" ">
        </div>
    </div>
    <div class="form-row">
        <legend class="w-auto">Informações para conta</legend>
        <div class="col-md-6">
            <label for="cli_email">E-mail</label>
            <input type="text" class="form-control" id="cli_email" name="cli_email"  placeholder=" ">
        </div>
        <div class="col-md-6">
            <label for="cli_senha">Senha</label>
            <input type="text" class="form-control" id="cli_senha" name="cli_senha"  placeholder=" ">
        </div>
    </div>

    <button type="submit" class="btn btn-primary  btn-block">Enviar</button>

</form>
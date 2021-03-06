<?php
/* Smarty version 3.1.36, created on 2020-11-23 19:34:12
  from 'D:\XAMPP\htdocs\TCC\adm\view\adm_clientes_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbc38e48f65b9_25353296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a2da311f56a542dafc64248ed8af9156a8c47ec' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\adm\\view\\adm_clientes_edit.tpl',
      1 => 1606162075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc38e48f65b9_25353296 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Meus Dados</h3>

<hr>

<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">

        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class="form-control"  minlength="3" required>
        </div>

        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11"  readonly>
        </div>

        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class="form-control"  min="10" max="99" required>
        </div>

        <div class="col-md-3">
            <label>Fone:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control"  minlength="3" required>
        </div>

        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-2">
            <label>UF:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
        </div>

        <div class="col-md-2">
            <label>Cep:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
        </div>

        <div class="col-md-4">
            <label>Email:</label>
            <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="form-control" required>
        </div>

    </section>
    <br>
    <br>

    <section class="row" id="btngravar">

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ID']->value;?>
" name="cli_id"  id="cli_id" class="form-control" >
            <br>
            <button type="submit" class="btn btn-geral btn-block "> <i class="glyphicon glyphicon-ok"></i> Gravar </button>
        </div>
        <div class="col-md-4"></div>

    </section>

</form>
<br>
<br>
<br>
<br><?php }
}

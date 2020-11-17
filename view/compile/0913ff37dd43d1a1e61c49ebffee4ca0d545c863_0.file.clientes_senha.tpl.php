<?php
/* Smarty version 3.1.36, created on 2020-11-17 05:35:33
  from 'D:\XAMPP\htdocs\TCC\view\clientes_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb35315d86a76_72812332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0913ff37dd43d1a1e61c49ebffee4ca0d545c863' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\clientes_senha.tpl',
      1 => 1605582440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb35315d86a76_72812332 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>

<form name="alterarsenha" method="post" action="clientes_senha">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual</label>
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
            <label>Digite sua nova senha</label>
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-info btn-block"> Alterar </button>
        </div>

        <div class="col-md-4"></div>

    </section>

</form>
<?php }
}

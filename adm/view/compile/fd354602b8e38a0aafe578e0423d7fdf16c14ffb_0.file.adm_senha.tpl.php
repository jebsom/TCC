<?php
/* Smarty version 3.1.36, created on 2020-11-24 14:21:44
  from 'C:\xampp\htdocs\TCC\adm\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbd4128937287_25515553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd354602b8e38a0aafe578e0423d7fdf16c14ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\adm\\view\\adm_senha.tpl',
      1 => 1606231065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd4128937287_25515553 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>

<form name="alterarsenha" method="post" action="">

    <section>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>
            <label>Digite sua nova senha</label>
            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
        <div class="col-md-4"></div>
    </section>
</form><?php }
}

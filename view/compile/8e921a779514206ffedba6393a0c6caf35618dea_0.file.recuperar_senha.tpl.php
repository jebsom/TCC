<?php
/* Smarty version 3.1.36, created on 2020-11-17 04:34:26
  from 'D:\XAMPP\htdocs\TCC\view\recuperar_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb344c2d4cbf5_32605575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e921a779514206ffedba6393a0c6caf35618dea' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\recuperar_senha.tpl',
      1 => 1605584064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb344c2d4cbf5_32605575 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadastrado para receber uma nova senha </h4>
<hr>
<form name="recuperarsenha" method="post" action="recuperar_senha">

    <section>

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>

        <div class="col-md-4"></div>

    </section>

</form>
<?php }
}

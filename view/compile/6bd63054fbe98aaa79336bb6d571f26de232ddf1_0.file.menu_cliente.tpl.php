<?php
/* Smarty version 3.1.36, created on 2020-11-13 23:52:16
  from 'D:\XAMPP\htdocs\TCC\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faf0e20958f89_12122424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd63054fbe98aaa79336bb6d571f26de232ddf1' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\menu_cliente.tpl',
      1 => 1605307917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faf0e20958f89_12122424 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 

<section class="row">

    <div class="text-center">

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES_DADOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>

    </div>

</section><?php }
}

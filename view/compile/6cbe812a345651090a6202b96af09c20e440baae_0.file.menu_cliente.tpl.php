<?php
/* Smarty version 3.1.36, created on 2020-11-17 19:03:01
  from 'C:\xampp\htdocs\TCC\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb410552e9f45_25235185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cbe812a345651090a6202b96af09c20e440baae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\menu_cliente.tpl',
      1 => 1605312280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb410552e9f45_25235185 (Smarty_Internal_Template $_smarty_tpl) {
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

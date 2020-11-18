<?php
/* Smarty version 3.1.36, created on 2020-11-17 19:00:58
  from 'C:\xampp\htdocs\TCC\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb40fda113d56_73373031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1a65b0a1978d0327f9d786d2a32dd7c42df25d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\email_cliente_cadastro.tpl',
      1 => 1605631593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb40fda113d56_73373031 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<h3> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado  <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
  com esta senha:  <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 

</h3>
<h3>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>

</h3><?php }
}

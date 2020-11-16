<?php
/* Smarty version 3.1.36, created on 2020-11-05 04:24:23
  from 'D:\XAMPP\htdocs\TCC\view\produtoinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa3706702db92_98259580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbc8c377b82b80286eba8f122b972c0ed31f7c9' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\produtoinfo.tpl',
      1 => 1604546648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa3706702db92_98259580 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODS']->value, 'Prod');
$_smarty_tpl->tpl_vars['Prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Prod']->value) {
$_smarty_tpl->tpl_vars['Prod']->do_else = false;
?>
    <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_nome'];?>
 - REF: <?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_refer'];?>
</h3>
    <hr>
    <div class="row">
                <div class="col-md-6 ">
            <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_img_g'];?>
" alt="" > 
        </div>
                <div class="col-md-6 thumbnail">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/images/logo-pagseguro.png" alt="">
            <hr>
            <div class="col-md-6">
                <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_valor'];?>
</h3>   

            </div>
            <div class="col-md-6">
                <form name="carrinho" method="post" action="">
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_id'];?>
">
                    <input type="hidden" name="acao" value="add">
                    <button  class="btn btn-success btn-lg">Comprar</button>
                </form> 
            </div>
        </div>
    </div>
    <!-- -->
        <div class="row">
        <hr>
        <h4 class="text-center">Mais imagens</h4>
        <ul style="list-style: none">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'Img');
$_smarty_tpl->tpl_vars['Img']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Img']->value) {
$_smarty_tpl->tpl_vars['Img']->do_else = false;
?>
                <li class="col-md-3 ">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['Img']->value['img_nome'];?>
" alt="" class="thumbnail">
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
        <div class="row">
        <hr>
        <h4 class="text-center">Descrição do produto</h4>
        <?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_descricao'];?>
 
    </div>  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

<?php
/* Smarty version 3.1.36, created on 2020-11-18 14:13:07
  from 'C:\xampp\htdocs\TCC\view\produto_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb55623d17cc8_15768564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ecc0c9d73c904e6f968924c560eabd63a804f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\produto_info.tpl',
      1 => 1605312280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb55623d17cc8_15768564 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                    <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_id'];?>
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

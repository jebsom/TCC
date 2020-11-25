<?php
/* Smarty version 3.1.36, created on 2020-11-24 20:23:10
  from 'D:\XAMPP\htdocs\TCC\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbd95de54db77_91789801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ab4ac710fb39f9cbdf721568675718776a3192' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\produtos.tpl',
      1 => 1606260184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd95de54db77_91789801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>
<?php if ($_smarty_tpl->tpl_vars['PROD_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger"> Nenhum produto encontrado!!</h4>
    <meta http-equiv="refresh" content="1;url='<?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
'">
<?php }?>
<!--  começa lista de produtos  ---->   
<section id="produtos" class="row">  

    <ul style="list-style: none" >
        <div class="row" id="pularliha">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODS']->value, 'Prod');
$_smarty_tpl->tpl_vars['Prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Prod']->value) {
$_smarty_tpl->tpl_vars['Prod']->do_else = false;
?>
                <li class="col-md-4">
                    <div class="thumbnail">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PROD_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_slug'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_img'];?>
" alt="" > 
                            <div class="caption">
                                <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_nome'];?>
</h4> 
                                <h3 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['Prod']->value['prod_valor'];?>
</h3>
                            </div>
                        </a>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </ul>

</section>


<section id="pagincao" class="row">
    <center>
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
</section><?php }
}

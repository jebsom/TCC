<?php
/* Smarty version 3.1.36, created on 2020-11-22 15:16:40
  from 'C:\xampp\htdocs\TCC\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbaab082b9083_39380962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da36400cf51ad46fbbf5be144a004a3ef993fc5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\adm\\view\\adm_produtos.tpl',
      1 => 1606068238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbaab082b9083_39380962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">

    <div class="col-md-4"> </div>

    <div class="col-md-4"> </div>

    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTO_ADD']->value;?>
" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>

    </div>

</section>
<br>

<?php if ($_smarty_tpl->tpl_vars['PROD_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
<?php }?>

<section id="produtos" class="row">  

    <table class="table table-bordered">  
        <tr class="bg-success text-success">
            <td></td> 
            <td>Produto</td> 
            <td>Categoria</td> 
            <td>Preço</td> 
            <td>      </td>      
            <td>      </td>      
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <tr>
                <td>  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img_p'];?>
" alt="" > </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
</td>
                <td class="text-right">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</td>
                <td>
                    <form name="prodeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                        <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
">
                        <button class="btn btn-success"> <i class="glyphicon glyphicon-pencil"></i> </button>
                    </form>  

                </td>

                <td>

                    <form name="prodimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                        <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
">
                        <input type="hidden" name="prod_nome" id="prod_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
">
                        <button class="btn btn-info"> <i class="glyphicon glyphicon-picture"></i> </button>

                    </form>  

                </td>


            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>

</section>


<!--  paginação inferior   -->  
<section id="pagincao" class="row">
    <center>
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
</section>

<?php }
}

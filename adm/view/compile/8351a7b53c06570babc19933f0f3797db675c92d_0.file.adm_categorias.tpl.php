<?php
/* Smarty version 3.1.36, created on 2020-11-20 20:28:48
  from 'D:\XAMPP\htdocs\TCC\adm\view\adm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb851308d7fd9_94949053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8351a7b53c06570babc19933f0f3797db675c92d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\adm\\view\\adm_categorias.tpl',
      1 => 1605914905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb851308d7fd9_94949053 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar categorias </h4>
<hr>

<section class="row">

    <form name="categoriainsere" method="post" action="">
        <div class="col-md-4">
            <input type="text" name="cat_nome" class="form-control" required>  
        </div>
        <div class="col-md-4">
            <button class="btn btn-success" name="cat_nova" value="cat_nova"> Inserir nova categoria</button>
        </div>
        <div class="col-md-4"></div>
    </form>

</section>
<hr>

<section class="row" id="listarcategorias">

    <center>
        <table class="table table-bordered" style="width: 90%">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <form name="categorias_editar" method="post" action="">
                    <tr>
                        <td style="width: 70%">
                            <input type="text" name="cat_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
" class="form-control" required> 
                            <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_id'];?>
">
                        </td>
                        <td>
                            <button class="btn btn-success" name="cat_editar" value="cat_editar">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" name="cat_apagar" value="cat_apagar">Apagar</button>
                        </td>
                    </tr>        
                </form>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </center>

</section>

<?php }
}

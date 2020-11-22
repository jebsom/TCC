<?php
/* Smarty version 3.1.36, created on 2020-11-22 15:16:49
  from 'C:\xampp\htdocs\TCC\adm\view\adm_produtos_img.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbaab11088dd5_92321336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75d3763e284bfb7e7b629e5d504e213b8db6485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\adm\\view\\adm_produtos_img.tpl',
      1 => 1606068238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbaab11088dd5_92321336 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Imagens do produto</h4>

<hr>

<section class="row" id="novaimg">

    <form name="nova" method="post" action=""  enctype="multipart/form-data">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value;?>
">
            <input type="file" name="prod_img"  class="form-control"  required>
            <br>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success "> Enviar </button> 
        </div>
    </form> 

</section>

<hr>

<section class="row" id="listarimg">

    <form name="deletar" method="post" action="">
        <ul style="list-style: none">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                <li class="col-md-3 ">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">
                    <label>Apagar?</label> 
                    <input type="checkbox" class=" input-lg" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">   
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_prod_id'];?>
">
        </ul>
        <br>
        <section class="col-md-12 text-center" id="apagar">
            <hr>
            <button class="btn btn-danger"> Apagar Selecionadas</button>
        </section>
        <br>
        <br>
        <br>
    </form>
</section>
<section>
    <br>
    <br>
    <br>
    <br>
</section>      <?php }
}

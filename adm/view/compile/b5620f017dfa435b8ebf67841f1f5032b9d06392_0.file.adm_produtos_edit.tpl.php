<?php
/* Smarty version 3.1.36, created on 2020-11-19 02:13:06
  from 'D:\XAMPP\htdocs\TCC\adm\view\adm_produtos_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb5fee2a57ae8_66097348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5620f017dfa435b8ebf67841f1f5032b9d06392' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\adm\\view\\adm_produtos_edit.tpl',
      1 => 1605762781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5fee2a57ae8_66097348 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Editar produto </h4>
<hr>

<section class="row" id="camposproduto">
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="prod_nome" id="prod_nome" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_nome'];?>
">
        </div>

        <div class="col-md-4">
            <label>Categoria</label>
            <select name="prod_categoria" id="prod_categoria" class="form-control" required>
                <option value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['cat_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['cat_nome'];?>
 </option>                           
                <option value=""> Escolha</option>                           
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                    <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
</option>                                        
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select>
        </div>

        <div class="col-md-2">
            <label>Ativo</label>
            <select name="prod_ativo" id="prod_ativo" class="form-control" required >
                <option value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_ativo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_ativo'];?>
 </option>
                <option value=""> Escolha </option>
                <option value="NAO"> Não </option>
                <option value="SIM"> Sim </option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Modelo</label>
            <input type="text" name="prod_modelo" id="prod_modelo" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_modelo'];?>
"  >
        </div>

        <div class="col-md-2">
            <label>Referencia</label>
            <input type="text" name="prod_refer" id="prod_refer" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_refer'];?>
" >
        </div>

        <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="prod_valor" id="prod_valor" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_valor'];?>
">
        </div>

        <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="prod_estoque" id="prod_estoque" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_estoque'];?>
">
        </div>

        <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="prod_peso" id="prod_peso" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_peso'];?>
">
        </div>

        
        <div class="col-md-12">

            <div class="col-md-4">
                <hr> 
                <img src="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_img'];?>
" class="thumbnail" alt="">
            </div>

            <div class="col-md-4">
                <hr>
                <label>Imagem Principal</label>
                <input type="file" name="prod_img" class="form-control btn btn-primary" id="prod_img">
                <input type="hidden" name="prod_img_atual" id="prod_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_img_atual'];?>
">
                <input type="hidden" name="prod_img_arquivo" id="prod_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_img_arquivo'];?>
">
            </div>

            <div class="col-md-4"></div>

        </div>

        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="prod_descricao" id="prod_descricao" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_descricao'];?>
</textarea>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
                tinymce.init({
                    selector: "textarea"
                });
            <?php echo '</script'; ?>
>
        </div>

        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="prod_slug" id="prod_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_slug'];?>
">
        </div>

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Gravar </button>
        </div>

        <div class="col-md-4 text-right"></div>

        <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_id'];?>
">
    </form>

</section>

<section class="row">

    <div class="col-md-4"></div>

    <div class="col-md-4"></div>

    <div class="col-md-4 text-right">
        <br>
        <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="glyphicon glyphicon-remove"></i> Apagar Produto</button> 
    </div>

    <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
        <br>
        <form name="frm_apagar" method="post" action="">
            <label>Apagar este produto?</label>
            <input type="radio" name="confirmar" value="SIM" required>
            <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> OK </button> 
            <input type="hidden" name="prod_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_id'];?>
">
            <input type="hidden" name="prod_apagar" value="SIM">
            <input type="hidden" name="prod_img_arquivo" id="prod_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PROD']->value[1]['prod_img_arquivo'];?>
">
        </form>
    </div>

</section>
<br>
<br>
<br>
<br><?php }
}

<?php
/* Smarty version 3.1.36, created on 2020-11-18 16:08:51
  from 'C:\xampp\htdocs\TCC\adm\view\adm_produtos_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb571438edee1_91221599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97372eeda154cecfcff9fa88e7bc592df4a63ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\adm\\view\\adm_produtos_add.tpl',
      1 => 1605726529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb571438edee1_91221599 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Adicionar novo produto </h4>
<hr>

<section class="row" id="camposproduto">

    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" class="form-control"  required >
        </div>

        <div class="col-md-4">
            <label>Catogoria</label>
            <select name="pro_categoria" id="pro_categoria" class="form-control" required>
                <option value=""> Escolha </option>                           
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
            <select name="prod_ativo" id="prod_ativo" class="form-control" required>
                <option value=""> Escolha </option>
                <option value="NAO"> Não </option>
                <option value="SIM"> Sim </option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Modelo</label>
            <input type="text" name="prod_modelo" id="prod_modelo" class="form-control"  >
        </div>

        <div class="col-md-2">
            <label>Referência</label>
            <input type="text" name="prod_refer" id="prod_refer" class="form-control"  >
        </div>

        <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="prod_valor" id="prod_valor" class="form-control" required >
        </div>

        <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="prod_estoque" id="prod_estoque" class="form-control" required >
        </div>

        <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="prod_peso" id="prod_peso" class="form-control" required >
        </div>

        
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
                <label>Imagem Principal</label>
                <input type="file" name="prod_img" class="form-control " id="prod_img">
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="prod_descricao" id="prod_descricao" rows="5" class="form-control" ></textarea>
                    </div>

        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="prod_slug" id="prod_slug"   class="form-control" >
        </div>

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Gravar </button>
        </div>

        <div class="col-md-4"></div>

    </form>

</section>
<br>
<br>
<br>
<br>





<?php }
}

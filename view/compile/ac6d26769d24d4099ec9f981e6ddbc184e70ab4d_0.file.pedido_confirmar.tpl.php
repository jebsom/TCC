<?php
/* Smarty version 3.1.36, created on 2020-11-14 04:34:32
  from 'D:\XAMPP\htdocs\TCC\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faf5048058163_45923880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6d26769d24d4099ec9f981e6ddbc184e70ab4d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\pedido_confirmar.tpl',
      1 => 1605324826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faf5048058163_45923880 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-info" title="">Voltar para Carrinho</a>
    </div>

</section>
<br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
        <table class="table table-bordered table-striped" style="width: 95%">

            <tr class="text-danger bg-danger">
                <td></td> 
                <td>Produto</td> 
                <td>Valor R$</td> 
                <td>X</td> 
                <td>Sub Total R$</td> 


            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODS']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <tr>

                    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
"> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_valor'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_qtd'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_subTotal'];?>
 </td>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </table>

    </center>

</section>

<section class="row" id="total">

    <div class="col-md-4 text-right">
    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
            Total : R$ <?php echo $_smarty_tpl->tpl_vars['V_TOTAL']->value;?>

        </h4>
        <hr>
        <h4>
            Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

        </h4>
        <hr>
        <h4>
            Total com Frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_COM_FRETE']->value;?>

        </h4>
    </div>

    <div class="col-md-4 ">
        <form name="finalizar" id="finalizar"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDO_FINALIZAR']->value;?>
">
            <button class="btn btn-success btn-block btn-md" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Finalizar Compra</button>
        </form>
    </div>
</section><?php }
}

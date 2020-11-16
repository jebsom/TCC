<?php
/* Smarty version 3.1.36, created on 2020-11-14 05:31:10
  from 'D:\XAMPP\htdocs\TCC\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faf5d8e5be435_66166509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dc4ca047a6778be9330cae41047121b41f7c43d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\pedido_finalizar.tpl',
      1 => 1605326440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faf5d8e5be435_66166509 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Finalizar Pedido</h3>
<hr>

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
        <div class="alert alert-success">Pedido finalizado com sucesso!</div>

    </center>

</section>

<section class="row" id="total">

    <div class="col-md-12 text-right text-danger bg-warning" align="right">
        <h4>
            Total : R$ <?php echo $_smarty_tpl->tpl_vars['V_TOTAL']->value;?>

        </h4>
        <hr><h4>
            Frete: R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

        </h4>
        <hr><h4>
            Total com Frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_COM_FRETE']->value;?>

        </h4>
        <hr>
    </div>

</section>

<section class="row">
    <h3 class="text-center"> Formas de pagamento </h3>     

    <div class="col-md-4">
    </div>
    <!-- botao de pagamento  -->
    <div class="col-md-4">

        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/images/logo-pagseguro.png"  alt=""> 
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>

    </div>
    <div class="col-md-4">

    </div>
</section>
<br>
<br><?php }
}

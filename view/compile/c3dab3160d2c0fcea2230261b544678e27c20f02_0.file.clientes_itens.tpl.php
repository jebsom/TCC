<?php
/* Smarty version 3.1.36, created on 2020-11-25 02:12:56
  from 'D:\XAMPP\htdocs\TCC\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbde7d88b60c8_42653429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3dab3160d2c0fcea2230261b544678e27c20f02' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\clientes_itens.tpl',
      1 => 1606281151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbde7d88b60c8_42653429 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Dados do pedido</h4>

<section class="row">

    <center>

        <table class="table table-bordered" style="width: 80%">
            <tr class="bg-success">
                <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_refer'];?>
</td>
                <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pgto_status'];?>
</td>
            </tr>  
        </table>

    </center>

</section>


<section class="row" id="listaitens">

    <center>

        <table class="table table-bordered" style="width: 80%">
            <tr class="text-success bg-success">
                <td></td>
                <td>Item</td>
                <td>Valor Uni</td>
                <td>X</td>
                <td>Sub</td>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <tr>

                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                    <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                    <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                    <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </table>

    </center>

</section>


<section class="row" id="resumo">

    <center>

        <table class="table table-bordered" style="width: 80%">
            <tr>
                <td class="text-danger"> <b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                <td class="text-danger"> <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                <td class="text-danger"> <b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
            </tr>  
        </table>

</section>  


<?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pgto_status'] == 'NAO') {?>          
    <!--  modos de pagamento e outras informações --> 
    <section class="row">
        <h3 class="text-center"> Formas de pagamento </h3>     

        <div class="col-md-4">
        </div>
        <!-- botao de pagamento  -->
        <div class="col-md-4">
            <center>
                <button class="btn btn-success btn-lg block" onclick="PagSeguroLightbox({
                        code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
                    }, {
                        success: function (transactionCode) {
                            alert('Transação efetiva - ' + transactionCode);
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REFER']->value;?>
';
                                        },
                                        abort: function () {
                                            alert('Erro no processo de pagamento');
                                            window.location = '<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REFER']->value;?>
';
                                                        }
                                                    });"> Pague com PagSeguro</button>
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
            </center>
        </div>
        <div class="col-md-4">

        </div>
    </section>
<?php }
}
}

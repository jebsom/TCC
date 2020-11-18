<?php
/* Smarty version 3.1.36, created on 2020-11-18 14:13:34
  from 'C:\xampp\htdocs\TCC\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb5563e44c343_58644103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa557d23c8bac7eb1db4a6cb1739a99c2347feaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\clientes_itens.tpl',
      1 => 1605717055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5563e44c343_58644103 (Smarty_Internal_Template $_smarty_tpl) {
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

        <div class="col-md-4"></div>

        <div class="col-md-4">

            BOTÃO DE PAGAMENTO
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
            <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>

        </div>
        <div class="col-md-4"></div>

    </section>
<?php }
}
}

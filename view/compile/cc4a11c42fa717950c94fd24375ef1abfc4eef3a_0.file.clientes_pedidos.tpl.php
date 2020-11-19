<?php
/* Smarty version 3.1.36, created on 2020-11-18 23:06:10
  from 'D:\XAMPP\htdocs\TCC\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb5d312545932_85954705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4a11c42fa717950c94fd24375ef1abfc4eef3a' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\clientes_pedidos.tpl',
      1 => 1605751413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5d312545932_85954705 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<section class="row" id="pedidos">

    <h4 class="text-center">Meus Pedidos</h4>
    <br>
    <center>
        <?php if ($_smarty_tpl->tpl_vars['QTD_PEDIDOS']->value > 0) {?>
            <table class="table table-bordered" style="width: 90%">

                <tr class="text-danger bg-danger">
                    <td>Data</td>
                    <td>Hora</td>
                    <td>Ref</td>

                    <td>Status</td>
                    <td></td>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                    <tr>

                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_refer'];?>
</td>

                        <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pgto_status'] == 'NAO') {?> 
                            <td style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pgto_status'];?>
</span></td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pgto_status'] == 'Pago') {?>
                            <td style="width: 15%"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pgto_status'];?>
</span></td>
                            <?php } else { ?>
                            <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pgto_status'];?>
</td>
                        <?php }?>

                    <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="ped_cod" id="ped_cod" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
                    </form>    

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
        <?php } else { ?>
            <h4 class="alert alert-info"> Sem pedidos realizados.</h4>
        <?php }?>
    </center>


</section>
<section id="pagincao" class="row">
    <center>
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
</section><?php }
}

<?php
/* Smarty version 3.1.36, created on 2020-11-14 04:42:41
  from 'D:\XAMPP\htdocs\TCC\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faf5231d5a4d5_59047088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e310ca813767c1be430c8acc38b2fe0ed89d1f' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\carrinho.tpl',
      1 => 1605325018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faf5231d5a4d5_59047088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-info" title="">Comprar Mais</a>
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
                <td></td> 

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
                    <td> 
                        <form name="del" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALT']->value;?>
">

                            <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_id'];?>
">    
                            <input type="hidden" name="acao" value="del">    

                            <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                        </form>
                    </td>


                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </table>

    </center>


</section><!-- fim da listagem itens -->




<hr>

<!-- botoes de baixo e valor total -->
<section class="row" id="total">

    <div class="col-md-4 text-right">

    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
            Total : R$ <?php echo $_smarty_tpl->tpl_vars['V_TOTAL']->value;?>

        </h4>
    </div>

    <!-- botão de limpar-->
    <div class="col-md-4 ">

        <form name="limpar" method="post" id ="limpar" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALT']->value;?>
">
            <input type="hidden" name="acao" value="limpar">
            <input type="hidden" name="prod_id" value="1">

            <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>

        </form>
        <br>
        <form name="pedido_confirmar"  id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
            <button class="btn btn-success btn-block btn-md" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
            <span id="frete" class="btn-block"></span>
        </form>
    </div>
</section>

<hr>

<section class="row" id="dadosfrete">

    <div class="col-md-4"></div>

    <div class="col-md-4">

        <!-- campos para tratar  do  frete -->
        <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>

        <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >

        <input type="hidden" name="frete_valor" id="frete_valor" value="0">

    </div> 

    <div class="col-md-4">
        <!-- botão frete -->
        <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>

    </div>


</section>

<hr>

<br>

<!-- botão finalzar -->

<?php echo '<script'; ?>
>
    $(document).ready(function () {

        // validar frete
        $('#buscar_frete').click(function () {

            var CEP_CLIENTE = $('#cep_frete').val();
            var PESO_FRETE = $('#peso_frete').val();

            if (CEP_CLIENTE.length !== 8) {
                alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                $('#frete').addClass(' text-center text-danger');
                $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                $('#cep_frete').focus();
            } else {


                $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                $('#frete').addClass(' text-center text-danger');

                // carrego o combo com os bairros

                $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);

            } // fim do IF digitei o CEP


        }); // fim do change


    }); // fim do ready

<?php echo '</script'; ?>
>
<?php }
}

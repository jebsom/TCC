<?php
/* Smarty version 3.1.36, created on 2020-11-14 06:01:01
  from 'D:\XAMPP\htdocs\TCC\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faf648df04215_20827438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69409d47beb84071a2aeddd4be169597d6584458' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\email_compra.tpl',
      1 => 1605330044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faf648df04215_20827438 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .tabela {
        border-collapse: collapse;
        width: 100%;
    }

    .tabela th, td {
        text-align: left;
        padding: 8px;
    }

    .tabela tr:nth-child(odd){
        background-color: #b2b2b2;
    }

    .sessao{
        padding:20px;
    }


    .total{
        text-align:right;
    }

    .frete{
        text-align:right;
    }

    .totalfrete{
        text-align:right;
        font-size:18px;
        font-style: bold;
        color:#062a46;
    }

    .textoinicio{
        text-align:center;
    }

    .minhaconta{
        text-align:center;
    }
</style>

<p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
, obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p>


<section class="row">

    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" > Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
 </a>
    </p>                 

</section>


<section class="row ">

    <center>
        <table class="tabela" style="width: 95%;">
            <tr style="border: 1px solid #b2dba1; background-color: #072339; color:#FFF;font-size:18px;" >
                <td colspan="5">Itens do seu pedido </td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <tr style="border: 1px solid #b2dba1">
                    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 "> </td> 
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
  </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
 </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qtd'];?>
   </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_subTotal'];?>
 </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </center>

</section>


<div class="sessao">

    <p class="total">
        <b>Total :</b> R$ <?php echo $_smarty_tpl->tpl_vars['V_TOTAL']->value;?>

    </p>
    <p class="frete">
        <b>Frete</b> : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

    </p>
    <p class="totalfrete">
        <b>Final : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_COM_FRETE']->value;?>
</b>
    </p>

</div><?php }
}

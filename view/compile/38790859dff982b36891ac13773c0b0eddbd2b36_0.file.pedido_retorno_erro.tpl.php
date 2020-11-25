<?php
/* Smarty version 3.1.36, created on 2020-11-25 00:08:04
  from 'D:\XAMPP\htdocs\TCC\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbdca94551669_09803362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38790859dff982b36891ac13773c0b0eddbd2b36' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\view\\pedido_retorno_erro.tpl',
      1 => 1606272106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbdca94551669_09803362 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
<hr>
<section  class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <p> Caso teve algum problema entre em contato conosco, informando <br>
            o código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
 </b>
        </p> 
        <p> Ou pode tentar novamente o pagamento na seção "Pedidos" clicando em "Detalhes",<br>
            verá seus itens comprados e o abaixo o botão "Completar Pagamento Agora"
        </p>  
        <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
        <p>
        <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
            <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
            <button class="btn btn-success btn-block btn-lg"> Fazer Pagamento Agora</button>
        </form>        
        </p>
    </div>
    <div class="col-md-3"></div>
</section><?php }
}

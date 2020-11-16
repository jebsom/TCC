<?php
/* Smarty version 3.1.36, created on 2020-11-16 12:16:28
  from 'C:\xampp\htdocs\TCC\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb25f8c736093_01450055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1b2aa10cd1dc9335cb6bb902c5bb88ed5becff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\contato.tpl',
      1 => 1605312278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb25f8c736093_01450055 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">

        <form class="form-horizontal" id="frmcontatoazul" action="envio" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Contato</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-nome">Nome</label>  
                    <div class="col-md-8">
                        <input id="cont-nome" name="cont-nome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
                        <span class="help-block">help</span>  
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-email">Email</label>  
                    <div class="col-md-8">
                        <input id="cont-email" name="cont-email" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
                        <span class="help-block">help</span>  
                    </div>
                </div>

                <!-- Text input-->
                
                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-msg">Mensagem</label>
                    <div class="col-md-8">                     
                        <textarea class="form-control" id="cont-msg" rows="6" name="cont-msg" placeholder="Use essa área para entrar em contato conosco ou solicitar um orçamento."></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="btnenviar"></label>
                    <div class="col-md-8">
                        <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div><?php }
}

<?php
/* Smarty version 3.1.36, created on 2020-11-17 19:01:05
  from 'C:\xampp\htdocs\TCC\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb40fe1808524_01699863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc6f8c7b1af1d2890bfa270fdac0383b6c91751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TCC\\view\\login.tpl',
      1 => 1605631593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb40fe1808524_01699863 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>
    <section class="row" id="fazerlogin">

        <form name="cliente_login" method="post" action="" >

            <div class="col-md-4 text-center">

                            </div>

            <div class="col-md-4">

                <div class="form-group"> 

                    <label></i> Email: </label>
                    <input type="email"  class="form-control " name="txt_email" id="txt_email"value="" placeholder="Digite seu email" required autocomplete="off">        

                </div>

                <div class="form-group"> 

                    <label> Senha: </label>
                    <input type="password"  class="form-control " name="txt_senha" id="txt_senha" value="" placeholder="Digite sua senha" required>        

                </div>

                <div class="form-group"> 

                    <button class="btn btn-success btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>

                </div>
                <div class="form-group"> 

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECUPERAR']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>

                </div>

            </div>

            <div class="col-md-4 text-center"></div>

        </form>

    </section>
<?php }
}
}

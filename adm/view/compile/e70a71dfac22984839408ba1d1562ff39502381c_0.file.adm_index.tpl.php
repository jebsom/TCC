<?php
/* Smarty version 3.1.36, created on 2020-11-24 17:39:55
  from 'D:\XAMPP\htdocs\TCC\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbd6f9b41bf02_46546738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e70a71dfac22984839408ba1d1562ff39502381c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TCC\\adm\\view\\adm_index.tpl',
      1 => 1606195038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd6f9b41bf02_46546738 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/contatos/contato.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/js/jquery-3.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/contatos/contato.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container-fluid">

            <div class="row" id="topo">
                <div class="container">
                    <div class="col-md-6">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/images/logo.png" alt=""> 
                    </div>
                    <div class="col-md-6 text-right">
                        <br>
                        <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                            Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_SENHA']->value;?>
" class="btn btn-warning"><i class="glyphicon glyphicon-asterisk"></i>Alterar Senha</a> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a><br> <br>
                            <h6><p>Último logn em: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 as <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>
</p></h6>
                        <?php }?>
                    </div>
                </div>    
            </div>

            <div class="row" id="barra-menu">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME_ADM']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS_ADM']->value;?>
"><i class="glyphicon glyphicon-tag"></i> Categorias</a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_ADM']->value;?>
"><i class="glyphicon glyphicon-user"></i> Produtos</a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES_ADM']->value;?>
"><i class="glyphicon glyphicon-shopping-cart"></i> Clientes </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS_ADM']->value;?>
" ><i class="glyphicon glyphicon-envelope"></i> Pedidos </a> </li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>
                        </div>

                    </div> 
                </nav>
            </div> 

            <div class="row" id="conteudo">

                <div class="container"> 

                    <div class="col-md-2" id="lateral">
                        <div class="list-group">
                            <span class="list-group-item active"> Categorias</span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'Cat');
$_smarty_tpl->tpl_vars['Cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Cat']->value) {
$_smarty_tpl->tpl_vars['Cat']->do_else = false;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['Cat']->value['cat_link_adm'];?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $_smarty_tpl->tpl_vars['Cat']->value['cat_nome'];?>
</a> 
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_ADM']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Todas Categorias</a> 
                        </div>            
                    </div>

                    <div class="col-md-10">
                        <?php 
                        Rotas::get_pagina();
                        ?>
                    </div>  
                                        <h4 class="text-center text-danger"> Olá Administrador <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 

                    <section class="row">

                        <div class="text-center">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS_ADM']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_ADM']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES_ADM']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS_ADM']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>

                        </div>

                    </section>

                </div>   

            </div>

            <footer class="row" id="rodape">
                <center><h4><?php echo $_smarty_tpl->tpl_vars['TITULO']->value;?>
</h4></center>
            </footer>

        </div> 

    </body>

</html>
<?php }
}

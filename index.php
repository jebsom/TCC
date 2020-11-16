<?php

if (!isset($_SESSION)) {
    session_start();
}
//
//if (!isset($_SESSION['PED']['pedido'])) {
//    $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
//}
//
//if (!isset($_SESSION['PED']['refer'])) {
//    $_SESSION['refer'] = date('YmdHms');
//}
//    session_destroy();

require './lib/autoload.php';

$smarty = new Template();
$categorias = new Categorias();
$categorias->getCategorias();

$smarty->assign('GET_TEMPLATE', Rotas::get_template());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_HOME', Rotas::get_home());
$smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());
$smarty->assign('PAG_CONTA', Rotas::pag_conta());
$smarty->assign('TITULO', Config::SITE_NOME);
$smarty->assign('CATEGORIAS', $categorias->getItens());
$smarty->assign('LOGADO', Login::logado());
if (Login::logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}
$smarty->assign('PAG_LOGOFF', Rotas::pag_logoff());

$dados = new Conex();

$smarty->display('index.tpl');


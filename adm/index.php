<?php

date_default_timezone_set('America/Sao_Paulo');

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

require '../lib/autoload.php';

if (!Login::logadoAdm()) {
    Rotas::redirecionar(1, 'login.php');
    exit('Erro!!! Acesso negado!');
}

$smarty = new Template();
$categorias = new Categorias();
$categorias->getCategorias();

$smarty->assign('GET_TEMPLATE', Rotas::get_template());
$smarty->assign('TITULO', Config::SITE_NOME);
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_home());
$smarty->assign('GET_HOME_ADM', Rotas::get_home_adm());
$smarty->assign('PAG_CLIENTES_ADM', Rotas::pag_clientes_adm());
$smarty->assign('PAG_PEDIDOS_ADM', Rotas::pag_pedidos_adm());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());
$smarty->assign('PAG_CATEGORIAS_ADM', Rotas::pag_categorias_adm());
$smarty->assign('PAG_PRODUTOS_ADM', Rotas::pag_produtos_adm());
$smarty->assign('CATEGORIAS', $categorias->getItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::logadoAdm());
$smarty->assign('PAG_ADM_SENHA', Rotas::get_home_adm() . '/adm_senha');
$smarty->assign('PAG_LOGOFF', Rotas::pag_logoff_adm());

if (Login::logadoAdm()) {
    $smarty->assign('USER', $_SESSION['ADM']['user_nome']);
    $smarty->assign('DATA', $_SESSION['ADM']['user_data']);
    $smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}


$dados = new Conex();

$smarty->display('adm_index.tpl');


<?php

$smarty = new Template();

Login::clienteMenu();

if (!isset($_POST['ped_cod'])) {
    Rotas::redirecionar(1, Rotas::pag_clientes_pedidos());
    exit;
}

$itens = new ItensPedido();

$pedido = filter_var($_POST['ped_cod'], FILTER_SANITIZE_STRING);

$itens->getItensPedido($pedido);

$smarty->assign('ITENS', $itens->getItens());
$smarty->assign('TOTAL', $itens->getTotal());


$smarty->display('clientes_itens.tpl');


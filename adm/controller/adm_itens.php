<?php

$smarty = new Template();


if (!isset($_POST['ped_cod'])) {
    Rotas::redirecionar(1, Rotas::pag_pedidos_adm());
    exit;
}

$itens = new Itens();

$pedido = filter_var($_POST['ped_cod'], FILTER_SANITIZE_STRING);

$itens->getItensPedido($pedido);

$smarty->assign('ITENS', $itens->getItens());
$smarty->assign('TOTAL', $itens->getValorTotal());
$smarty->display('adm_itens.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<?php

$smarty = new Template();

Login::clienteMenu();

$pedidos = new Pedidos();

$pedidos->getPedidosCliente($_SESSION['CLI']['cli_id']);
//var_dump($_SESSION['CLI']['cli_id']);

$smarty->assign('PEDIDOS', $pedidos->getItens());
$smarty->assign('PAG_ITENS', Rotas::pag_clientes_itens());

$smarty->display('clientes_pedidos.tpl');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


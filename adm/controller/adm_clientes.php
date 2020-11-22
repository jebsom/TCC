<?php

$smarty = new Template();

$cliente = new Clientes();
$cliente->getClientes();

$smarty->assign('CLIENTES', $cliente->getItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_clientesEdit_adm());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_pedidos_adm());

$smarty->display('adm_clientes.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


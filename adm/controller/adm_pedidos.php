<?php

$smarty = new Template();
$pedidos = new Pedidos();


if (isset(Rotas::$pag[1])) {
    $id = Rotas::$pag[1];
    $pedidos->getPedidosCliente($id);
} else {
    $pedidos->getPedidosCliente();
}

$smarty->assign('PEDIDOS', $pedidos->getItens());
$smarty->assign('PAG_ITENS', Rotas::pag_itens_adm());

if ($pedidos->TotalDados() > 0) {
    $smarty->display('adm_pedidos.tpl');
} else {
    echo '<div class = "alert alert-danger"> Sem pedidos para este cliente!</div>';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


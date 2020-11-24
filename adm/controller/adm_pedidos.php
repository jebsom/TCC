<?php

$smarty = new Template();
$pedidos = new Pedidos();

if (isset($_POST['ped_apagar'])) {
    $ped_cod = $_POST['ped_cod'];
    if ($pedidos->deletarPedido($ped_cod)) {
        echo '<div class="alert alert-warning">Pedido excluído com sucesso</div>';
        Rotas::redirecionar(1, Rotas::pag_pedidos_adm());
    }
}

if (isset(Rotas::$pag[1])) {

    $id = Rotas::$pag[1];
    $pedidos->getPedidosCliente($id);
} else if (isset($_POST['data_ini']) && isset($_POST['data_fim'])) {

    $pedidos->getPedidosData($_POST['data_ini'], $_POST['data_fim']);
} else if (isset($_POST['txt_ref'])) {

    $refer = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
    $pedidos->getPedidosRefer($refer);
} else {

    $pedidos->getPedidosCliente();
}
$smarty->assign('PEDIDOS', $pedidos->getItens());
$smarty->assign('PAG_ITENS', Rotas::pag_itens_adm());
$smarty->assign('PAGINAS', $pedidos->mostrarPaginacao());

if ($pedidos->TotalDados() > 0) {
    $smarty->display('adm_pedidos.tpl');
} else {
    echo '<div class = "alert alert-danger"> Sem pedidos registrados na loja!</div>';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<?php

$smarty = new Template();

Login::clienteMenu();

if (!isset($_POST['ped_cod'])) {
    Rotas::redirecionar(1, Rotas::pag_clientes_pedidos());
    exit;
}

$itens = new Itens();

$pedido = filter_var($_POST['ped_cod'], FILTER_SANITIZE_STRING);

$itens->getItensPedido($pedido);

$smarty->assign('ITENS', $itens->getItens());
$smarty->assign('TOTAL', $itens->getValorTotal());

if ($itens->getItens()[1]['ped_pgto_status'] == 'NAO'):

    $pag = new PagamentoPS();

    $pag->PagamentoITENS($_SESSION['CLI'], $itens->getItens()[1], $itens->getItens());

    $smarty->assign('PS_URL', $pag->psURL);
    $smarty->assign('PS_COD', $pag->psCod);
    $smarty->assign('PS_SCRIPT', $pag->psURL_Script);
    $smarty->assign('REFER', $pedido);
    $smarty->assign('PAG_RETORNO', Rotas::pag_pedido_retorno());
    $smarty->assign('PAG_RETORNO_ERRO', Rotas::pag_pedido_retorno_erro());
    $smarty->assign('GET_TEMPLATE', Rotas::get_template());

/// fim do pagamento            

endif;


$smarty->display('clientes_itens.tpl');


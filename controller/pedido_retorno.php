<?php

$smarty = new Template();

$pag = new PagamentoPS();
$pag->Nofificacao();

if (isset(Rotas::$pag[1])) {
    $ref = Rotas::$pag[1];
    $pag->BuscarTransacaoREF($ref);

    $smarty->assign('PAGO', $pag->info['pago']);
    $smarty->assign('CODIGO', $pag->info['codigo']);
    $smarty->assign('REF', $pag->info['referencia']);
    $smarty->assign('FORMA_PAG', $pag->info['forma_pag']);
    $smarty->assign('PAG_ITENS', Rotas::pag_clientes_itens());

    $smarty->display('pedido_retorno.tpl');
} else {

    echo '<div class="alert alert-danger">Sem transações  para informar </div>';
}